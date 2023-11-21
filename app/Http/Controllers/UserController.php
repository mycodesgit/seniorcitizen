<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\User;

class UserController extends Controller
{
    public function userRead() {
        $user = User::all();
        return view('users.list', compact('user'));
    }

    public function userCreate(Request $request) {

        if ($request->isMethod('post')) {
            $request->validate([
                'lname' => 'required',
                'fname' => 'required',
                'mname' => 'required',
                'username' => 'required|string|min:5|unique:users,username',
                'password' => 'required|string|min:5',
                'role' => 'required',
                'gender' => 'required',
            ]);

            $userName = $request->input('username'); 
            $existingUser = User::where('username', $userName)->first();

            if ($existingUser) {
                return redirect()->route('userRead')->with('error', 'User already exists!');
            }

            try {
                User::create([
                    'lname' => $request->input('lname'),
                    'fname' => $request->input('fname'),
                    'mname' => $request->input('mname'),
                    'username' => $userName,
                    'password' => Hash::make($request->input('password')),
                    'role' => $request->input('role'),
                    'gender' => $request->input('gender'),
                    'remember_token' => Str::random(60),
                ]);

                return redirect()->route('userRead')->with('success', 'User stored successfully!');
            } catch (\Exception $e) {
                return redirect()->route('userRead')->with('error', 'Failed to store user!');
            }
        }
    }

    public function userEdit($id) {
        $selectedUser = User::find($id);

        return view('users.editUser', compact('selectedUser'));
    }

    public function userUpdate(Request $request) {
        $user = User::find($request->id);
        
        $request->validate([
            'id' => 'required',
            'lname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'role' => 'required',
            'gender' => 'required',
        ]);

        try {
            $userName = $request->input('username');
            $existingUser = User::where('username', $userName)->where('id', '!=', $request->input('id'))->first();

            if ($existingUser) {
                return redirect()->back()->with('error', 'Username already exists for another user!');
            }

            $user = User::findOrFail($request->input('id'));
            $user->update([
                'lname' => $request->input('lname'),
                'fname' => $request->input('fname'),
                'mname' => $request->input('mname'),
                'username' => $userName,
                'role' => $request->input('role'),
                'gender' => $request->input('gender'),
            ]);

            return redirect()->route('userEdit', ['id' => $user->id])->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update User!');
        }
    }

    public function userUpdatePassword(Request $request) {
        $user = User::find($request->id);
        
        $request->validate([
            'id' => 'required',
            'password' => 'required|string|min:5',
        ]);

        try {
            $user = User::findOrFail($request->input('id'));
            $user->update([
                'password' => Hash::make($request->input('password'))
            ]);

            return redirect()->route('userEdit', ['id' => $user->id])->with('success', 'Password Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update User Password!');
        }
    }

    public function userDelete($id){
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status'=>200,
            'message'=>'Deleted Successfully',
        ]);
    }
}
