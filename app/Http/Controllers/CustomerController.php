<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function profile()
    {
        // Logic for displaying the user profile
        return view('customer.profile');  // Return a view for the profile page
    }

    public function carts()
    {
        // Logic for displaying the user's cart
        return view('customer.carts');  // Return a view for the carts page
    }

    public function history()
    {
        // Logic for displaying the user's booking history
        return view('customer.history');  // Return a view for the booking history page
    }

    public function referral()
    {
        // Logic for displaying the referral page
        return view('customer.referral');  // Return a view for the referral page
    }

    public function cases()
    {
        // Logic for displaying the cases page
        return view('customer.cases');  // Return a view for the cases page
    }
}