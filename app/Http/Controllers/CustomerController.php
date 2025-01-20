<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
    public function updateprofilepost(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'country' => 'required|string|max:2',
            'dob' => 'required|date',
        ]);

        $user = auth()->user();

        // Check if a new profile image is uploaded
        if ($request->hasFile('profile_image')) {
            // Delete the old image if it exists
            if ($user->profile_image && file_exists(public_path($user->profile_image))) {
                unlink(public_path($user->profile_image));
            }

            // Save the new image in the public folder
            $file = $request->file('profile_image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $filePath = 'profile_images/' . $fileName;

            $file->move(public_path('profile_images'), $fileName);

            // Update the user model with the new file path
            $user->profile_image = $filePath;
        }

        // Update other user details
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->country = $request->input('country');
        $user->date_of_birth = $request->input('dob');

        // Save the user data
        $user->save();

        // Redirect with success message
        return redirect()->route('customer.profile')->with('success', 'Profile updated successfully!');
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