<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomController extends Controller
{
    public function index(){
        return view('Welcome');
    }
}
