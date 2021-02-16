<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteTwoController extends Controller
{
    public function index(){
        return view('page/route2');
    }
}