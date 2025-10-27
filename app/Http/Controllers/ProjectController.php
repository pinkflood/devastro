<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAllProjects(){
        $projects = Project::all();
        return view("projects", compact("projects"));
    }
    public function getProjectByTahun($tahun){
        $projects = Project::where("tahun",$tahun)->get();

        return view("projects", compact("projects"));
    }

    public function create(){
        $students = Student::all();
        return view("projects.create", compact("students"));
    }

    public function store(Request $request) {
        $validated=$request->validate([
            "nama_project" => 'required|unique:projects',
            "tahun" => 'required|numeric',
            "deskripsi" => 'required',
            "student_id" => 'required'
        ]);

        Project::create($validated);

        return redirect("/projects")->with('success', "berhasil menambahkan data");
    }
}
