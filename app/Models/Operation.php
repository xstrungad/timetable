<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Teacher;
use App\Models\Subject;

class Operation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
            'course_id',
            'day',
            'class_start',
            'class_end',
            'room', 
            'circle',
            'year',
            'form',
            'teacher_id',
    ] ;
    
    public function subject() {
        return $this->hasOne(Subject::class, 'id', 'course_id');
    }

    public function teacher() {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }
}
