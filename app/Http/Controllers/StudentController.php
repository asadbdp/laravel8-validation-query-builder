<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function submit(){
        $stu = student::create([
            'name' => 'asad',
            'roll' => 125,
            'reg' => 521,
            'session' => '2020-2021',
            'class' => 9
        ]);

        if($stu){
            return "successfully add";
        }
        else{
            return "not successfully add";
        }

    }
}
