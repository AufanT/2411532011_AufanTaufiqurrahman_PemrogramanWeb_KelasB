<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class MyAppController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $customers = Customer::all();

        return view('myapp.index', compact('products', 'customers'));
    }
}
