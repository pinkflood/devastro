<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //definisi relasi
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
