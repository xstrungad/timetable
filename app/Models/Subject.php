<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Teacher;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_course',
        'name_course',
        'abbreviations_course',
        'guarantor_course',
    ];
    
    public function teacher() {
        return $this->hasOne(Teacher::class, 'id', 'guarantor_course');
    }
}
