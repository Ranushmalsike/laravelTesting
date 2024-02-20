<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class pgcontroller extends Controller
{
    public function welcome(){
        $getData = register::all();
        return view('welcome', compact('getData'));
    }

    public function product(){
        return view('product');
    }
}
