<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class registercn extends Controller
{
    //Register add data for data
    public function store(request $request){
        register::create([
            'name'=>$request->inputEmail4,
            'address'=>$request->inputAddress2
        ]);
        return redirect()->back();
    }
}
