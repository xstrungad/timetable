<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index() {
        $teachers = Teacher::all();
        //$teachers = Teacher::orderBy('lastname', 'ASC')->get(); 
        //$teachers = Teacher::orderBy('lastname', 'ASC')->orderBy('firstname', 'ASC')->get(); 
        return view('teachers.index')->with('teachers', $teachers);
    }
}
