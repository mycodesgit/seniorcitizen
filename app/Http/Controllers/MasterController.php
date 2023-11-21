<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use Carbon\Carbon;
use App\Models\Access;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    public function dashboard(){
        $citizen = Citizen::count();
        return view("home.dashboard", compact('citizen'));
    }

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
