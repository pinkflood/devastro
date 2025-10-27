<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //definisi relasi
    protected $fillable = [
        'nama_lengkap',
        'nis',
        'kelas',
        'alamat'
    ];
    
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
