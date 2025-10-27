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

    public function createStudent(){
        return view("students.create");
    }

    public function store(Request $request){
        //validasi data
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'nis' => 'required|unique:students|numeric',
            'kelas'=>'required',
            'alamat'=>'required'
        ]);

        //memasukkan record ke database
        Student::create($validated);

        //redirect
        return redirect()->route("students.all")->with("success","data berhasil ditambahkan");
    }
}
