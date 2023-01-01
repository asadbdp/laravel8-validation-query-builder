<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mamurjorController extends Controller
{
    public function index(){
        return 'mamurjor.com';
    }

    public function dump($name, $age=null){
        return $name.'<br>'.$age;
    }
}
