<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function edit()
    {
        $user = User::find(Auth::user()->id);
        return view('settings', [
            'users' => $user
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        // $this->$request->except('_token');
        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'password_confirmation' => 'same:newpassword',
        ]);

        // $request->except(['_token', '_method']);

        $hashedPassword = Auth::user()->password;

        // dd($hashedPassword);
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            if ($request->newpassword == $request->password_confirmation) {
                $users = User::find(Auth::user()->id);
                // $users->$request->except(['_token', '_method']);
                $users->password = bcrypt($request->newpassword);
                $users->save();
                session()->flash('message', 'password updated successfully');
                return redirect('/dashboard')->with('success', 'New Password Has Been Updated!');
            } else {
                session()->flash('message', 'new password can not be the old password!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'old password doesnt matched');
            return redirect()->back();
        }
    }
}
