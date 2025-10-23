<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Project extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
