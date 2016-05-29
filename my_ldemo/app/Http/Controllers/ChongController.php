<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChongController extends Controller
{
    public function index(){
        $peoples = ['张三','李四','王二','麻子','赵六'];
        return view('chong',compact('peoples'));
    }
}
