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
        'first_name',
        'last_name',
    ]; 

    public function getTeacherFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }
  
    public function getTeacherFullNameReverseAttribute() {
      return $this->last_name . ' ' . $this->first_name;
    } 
}
