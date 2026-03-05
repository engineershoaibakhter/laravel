<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function list(){
        return Student::all();
    }

    function save(){
        $student = new Student();
        $student->name = 'ahoaibakhter';
        $student->email='ahoaibakhter';

        if($student->save()){
            echo "New student is added";
        }
    }
}
