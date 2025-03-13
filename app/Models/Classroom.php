<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['nama_kelas'];

    public function teacher(){
        $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
