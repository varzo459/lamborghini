<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        // $orders = OrderController::where('user_id', Auth::id())->get();
        // return view('orders', compact('orders'));

        return view('order/orders');
    }
}
