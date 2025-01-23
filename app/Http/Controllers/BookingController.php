<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
class BookingController extends Controller
{
    public function show($slug, Request $request)
    {
   
        $today = $request->query('today');
        $from = $request->query('from');
        

        $today = \Carbon\Carbon::parse($today);
        $from = \Carbon\Carbon::parse($from);
        
    
        $product = Product::where('slug', $slug)->firstOrFail();
        
  
        $isBooked = Order::where('pro_id', $product->id)
            ->where(function ($query) use ($today, $from) {
                $query->whereDate('from_date', '<=', $from) 
                      ->whereDate('to_date', '>=', $today); 
            })
            ->exists();

    
    
        return view('theme.booking', compact('product', 'today', 'from', 'isBooked'));
    }
    
    
    
}
