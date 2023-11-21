<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use PDF;

use App\Models\Citizen;
use App\Models\CitizenI;
use App\Models\citizenII;
use App\Models\CitizenIII;
use App\Models\citizenBck;

class CitizenController extends Controller
{
    public function citizenRead() {
        $citizen = Citizen::all();
        return view ('citizen.list', compact('citizen'));
    }

    public function citizenCreate(Request $request) {
        try {
            $validatedData = $request->validate([
                'lname' => 'required|string',
                'fname' => 'required|string',
                'mname' => 'required|string',
                'ext' => 'required|string',
            ]);
            
            $citizen = Citizen::create([
                'lname' => $validatedData['lname'],
                'fname' => $validatedData['fname'],
                'mname' => $validatedData['mname'],
                'ext' => $validatedData['ext'],
            ]);
            
            $insertedID = $citizen->id;
            
            $models = [
                CitizenI::class,
                CitizenII::class,
                CitizenIII::class,
                CitizenBck::class,
            ];
            
            foreach ($models as $model) {
                $model::create([
                    'cid' => $insertedID,
                ]);
            }
    
            return redirect()->back()->with('success', 'Added Successfully');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function citizenMoreInfo($id) {
        $citizen = Citizen::find($id);
        $citizenI = CitizenI::where('cid', $id)->first();
        $citizenII = citizenII::where('cid', $id)->first();
        $citizenIII = citizenIII::where('cid', $id)->first();
        $citizenBck = CitizenBck::where('cid', $id)->first();
        return view ('citizen.moreinfo', compact('citizen', 'citizenI', 'citizenII', 'citizenIII', 'citizenBck'));
    }

    public function MoreInfoUpdate(Request $request) {
        try {
            $data = $request->data;
            $model = $request->model;
            $array = $request->array;
            $value = $request->value;
            $cid = $request->cid;
           
            $model == "Citizen" ? $citizen = Citizen::find($cid) : '';
            $model == "CitizenI" ? $citizen = CitizenI::find($cid) : '';
            $model == "CitizenII" ? $citizen = citizenII::find($cid) : '';
            $model == "CitizenIII" ? $citizen = citizenIII::find($cid) : '';
            $model == "CitizenBck" ? $citizen = CitizenBck::find($cid) : '';
    
            if ($citizen) {
                if(isset($array)){
                    // Get the current array value and explode it
                    $arrayVal = $citizen->$data;
                    $arrayVal = explode(",", $arrayVal);
                    $currentValue = isset($arrayVal[$array]) ? $arrayVal[$array] : null;
                    $newvalue = $currentValue === $value ? '' : $value;
                    $arrayVal[$array] = $newvalue;
                    $newarrayVal = implode(",", $arrayVal);
                    $citizen->$data = $newarrayVal;
                    $citizen->save();
                }
                
                else{
                    $citizen->$data = $value;
                    $citizen->save();
                }
                return response()->json(['success' => 'Updated Successfully']);
            } else {
                return response()->json(['error' => 'Citizen not found']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    } 
    
    public function citizenReadPdf($id) {
        $citizen = Citizen::join('citizen_i_s', 'citizens.id', '=', 'citizen_i_s.cid')
        ->join('citizen_i_i_s', 'citizens.id', '=', 'citizen_i_i_s.cid')
        ->join('citizen_i_i_i_s', 'citizens.id', '=', 'citizen_i_i_i_s.cid')
        ->join('citizen_bcks', 'citizens.id', '=', 'citizen_bcks.cid')
        ->where('citizens.id', $id)
        ->first();
        
        $pdf = PDF::loadView('citizen.list_pdf', compact('citizen'))->setPaper('legal', 'portrait');
        $pdf->setOption('margin', 1);
        return $pdf->stream();
    }

    public function citizenDelete($id){
        Citizen::find($id)->delete();
        CitizenI::where('cid', $id)->delete();
        CitizenII::where('cid', $id)->delete();
        CitizenIII::where('cid', $id)->delete();
        CitizenBck::where('cid', $id)->delete();        

        return response()->json([
            'status'=>200,
            'message'=>'Deleted Successfully',
        ]);
    }
}
