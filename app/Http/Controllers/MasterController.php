<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Access;
use App\Models\Citizen;
use App\Models\CitizenI;
use App\Models\citizenII;
use App\Models\CitizenIII;
use App\Models\citizenBck;

class MasterController extends Controller
{
    public function dashboard(){
        $citizen = Citizen::count();
        $maleCount = CitizenI::where('gender', 'Male')->count();
        $femaleCount = CitizenI::where('gender', 'Female')->count();
        $user = User::count();

        $maleAge6069Count = CitizenI::where('gender', 'Male')->whereBetween('age', [60, 69])->count();
        $maleAge7079Count = CitizenI::where('gender', 'Male')->whereBetween('age', [70, 79])->count();
        $maleAge8089Count = CitizenI::where('gender', 'Male')->whereBetween('age', [80, 89])->count();
        $maleAge9099Count = CitizenI::where('gender', 'Male')->whereBetween('age', [90, 99])->count();
        $maleAge100109Count = CitizenI::where('gender', 'Male')->whereBetween('age', [100, 109])->count();
        $maleAge110119Count = CitizenI::where('gender', 'Male')->whereBetween('age', [110, 119])->count();
        $maleAge120129Count = CitizenI::where('gender', 'Male')->whereBetween('age', [120, 129])->count();

        $femaleAge6069Count = CitizenI::where('gender', 'Female')->whereBetween('age', [60, 69])->count();
        $femaleAge7079Count = CitizenI::where('gender', 'Female')->whereBetween('age', [70, 79])->count();
        $femaleAge8089Count = CitizenI::where('gender', 'Female')->whereBetween('age', [80, 89])->count();
        $femaleAge9099Count = CitizenI::where('gender', 'Female')->whereBetween('age', [90, 99])->count();
        $femaleAge100109Count = CitizenI::where('gender', 'Female')->whereBetween('age', [100, 109])->count();
        $femaleAge110119Count = CitizenI::where('gender', 'Female')->whereBetween('age', [110, 119])->count();
        $femaleAge120129Count = CitizenI::where('gender', 'Female')->whereBetween('age', [120, 129])->count();



        return view("home.dashboard", compact(
                                                'citizen',
                                                'maleCount',
                                                'femaleCount',
                                                'user',
                                                'maleAge6069Count', 
                                                'maleAge7079Count', 
                                                'maleAge8089Count', 
                                                'maleAge9099Count',
                                                'maleAge100109Count',
                                                'maleAge110119Count',
                                                'maleAge120129Count',
                                                'femaleAge6069Count', 
                                                'femaleAge7079Count', 
                                                'femaleAge8089Count', 
                                                'femaleAge9099Count',
                                                'femaleAge100109Count',
                                                'femaleAge110119Count',
                                                'femaleAge120129Count',
                                            ));
    }

    // public function dashboard(){
    //     $citizen = Citizen::count();
    //     return view("home.dashboard", compact('citizen'));
    // }

    // public function topnavphoto() {
    //     $setting = Setting::firstOrNew(['id' => 1]);

    //     return view('layouts.master', compact('setting'));
    // }
    public function checkTrial()
    {
        $access = Access::first(); 
        
        if ($access && $access->status !== "paid") {
            $currentDateTime = Carbon::now('Asia/Manila');
    
            $decodedAccessLimit = base64_decode($access->access_limit);
    
            $accessLimitDate = Carbon::createFromFormat('d/m/Y', $decodedAccessLimit, 'Asia/Manila');
    
            if ($currentDateTime > $accessLimitDate) {
                $data = 'expire';
            } else {
                $data = 'nexpire';
            }
        } else {
            $data = 'paid';
        }
    
        return response()->json([
            'message' => $data,
        ]);
    }
    
    public function trialRenew(Request $request)
    {
        $key = $request->passkey;
        $pw = $request->password;
    
        $access = Access::first(); 
    
        if (Hash::check($pw, $access->password)) {
            $access->update([
                'access_limit' => base64_encode($key),
            ]);
    
            return view('login');
        }
    
        return redirect()->back()->with('error', 'Invalid PassKey');
    }
    

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You have been Successfully Logged Out');
    }
}
