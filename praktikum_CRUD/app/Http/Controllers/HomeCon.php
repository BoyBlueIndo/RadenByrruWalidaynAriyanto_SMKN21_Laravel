<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCon extends Controller
{
    public function index(){
        return view('home');
    }
}
