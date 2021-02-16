<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        $outils=['Bic', 'Crayon', 'Gomme','T-pex'];
        return view('page/new',compact('outils'));

    }
}
