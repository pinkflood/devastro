<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "hello everybody";
});

Route::get('/hello/{nama}', function($nama){
    return "hello ". $nama;
});

Route::get("/testing",function(){
    return view("test");
});

Route::get("/aboutme", function(){
    return view("aboutme");
});

Route::get("/home",[PagesController::class,"home"]);

Route::get("/about",function(){
    return view("about");
});

Route::get("/contact",function(){
    $nama = "adam";
    $nomor_telepon = "0812345678";
    return view("contact", ["name" => $nama ,
    "nomor_telepon"=>$nomor_telepon]);
});

Route::get("/profil/{nama}/{status}", [PagesController::class,"profil"]);

Route::get('/students',[StudentController::class,"getAllStudents"])->name("students.all");

Route::get('/student/search/{id}',[StudentController::class, "getStudent"]);

Route::get('/project/{tahun}', [ProjectController::class, "getProjectByTahun"]);
Route::get('/projects', [ProjectController::class, "getAllProjects"]);

Route::get('/student/create', [StudentController::class, "createStudent"])->name("student.create");

Route::post('/student/store', [StudentController::class,'store'])->name('students.store');

Route::get("/projects/create", [ProjectController::class, "create"])->name('project.create');

Route::post('/projects/store', [ProjectController::class,'store'])->name('project.store');