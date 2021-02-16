<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteOneController extends Controller
{
    public function index(){
        return view('page/route1');
    }
}
