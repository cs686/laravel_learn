<?php

namespace App\Http\Controllers;

use Validator;
use Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function create(){
        $req = Request::all();
        $validator =  Validator::make($req,[
            'username'=>'required|between:4,32',
            'password'=>'required|between:6,255',
        ]);

        if ($validator->fails()){
            return $validator->errors();
        }
        return '成功';
    }
}
