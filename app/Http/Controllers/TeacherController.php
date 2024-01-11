<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index() {
        $teachers = Teacher::all(); // vygeneruje všetky údaje z tabuľky teachers 
        //$teachers = Teacher::orderBy('lastname', 'ASC')->get(); // vygeneruje všetky údaje z tabuľky teachers a zoradí ich podľa priezviska
        //$teachers = Teacher::orderBy('lastname', 'ASC')->orderBy('firstname', 'ASC')->get(); // vygeneruje všetky údaje z tabuľky teachers a zoradí ich podľa priezviska a mena      
        return view('teachers.index')->with('teachers', $teachers);
    }
}
