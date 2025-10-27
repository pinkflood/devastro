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

Route::get('/students',[StudentController::class,"getAllStudents"]);

Route::get('/student/{id}',[StudentController::class, "getStudent"]);

Route::get('/project/{tahun}', [ProjectController::class, "getProjectByTahun"]);