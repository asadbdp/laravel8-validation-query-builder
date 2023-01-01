<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($name, $roll=null, $class=null){
        $data = ['name'=>$name, 'roll'=>$roll, 'class'=>$class];
        return view('test', ['data'=>$data]);
    }
}
