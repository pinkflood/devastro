<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProjectByTahun($tahun){
        $projects = Project::where("tahun",$tahun)->get();

        return view("projects", compact("projects"));
    }
}
