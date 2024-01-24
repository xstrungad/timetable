<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone_number',
    ];

    public function getTeacherFullNameReverseAttribute() {
        return $this->lastname . ' ' . $this->firstname;
      } 
}
