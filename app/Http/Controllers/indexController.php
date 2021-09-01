<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($id){
        return view('index',compact('id1'));
    }
}
