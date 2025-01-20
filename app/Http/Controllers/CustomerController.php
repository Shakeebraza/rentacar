<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class CustomerController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('theme.profile', compact('user'));
    }
    public function chnagepassword()
    {
        return view('theme.chnagepassword', compact('user'));
    }
    public function updateprofile()
    {
        $user = Auth::user();
        return view('theme.updateprofile', compact('user'));
    }
    public function changePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();


        if (!$user instanceof \App\Models\User) {
            return back()->withErrors(['user' => 'User not found or invalid.']);
        }


        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('customer.profile')->with('success', 'Password changed successfully.');
    }

    public function carts()
    {

        return view('theme.carts');
    }

    public function history()
    {

        return view('theme.history');
    }

    public function referral()
    {

        return view('theme.referral');
    }

    public function cases()
    {

        return view('theme.cases');
    }
}