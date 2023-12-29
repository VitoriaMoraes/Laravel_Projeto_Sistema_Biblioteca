<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotoesController extends Controller
{
    public function direcionarLogin(){
        return view('/login');
    }
}
