<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents(){
        $students = Student::all();

        return view("student", ["students"=>$students]);
    }

    public function getStudent($id){
        $student = Student::find($id);
        dd($student->nama_lengkap);
        return view("studentproject", compact("student"));
    }
}
