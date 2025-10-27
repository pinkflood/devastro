<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Project extends Model
{
    protected $fillable=[
        'nama_project',
        'tahun',
        'deskripsi',
        'student_id'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
