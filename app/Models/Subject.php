<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'short_name',
        'teacher_id',
    ]; 

    public function teacher() {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }  
}
