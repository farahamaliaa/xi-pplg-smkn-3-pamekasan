<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['nama','mapel','email'];

    public function classroom(){
        $this->hasOne(Classroom::class, 'teacher_id');
    }
}
