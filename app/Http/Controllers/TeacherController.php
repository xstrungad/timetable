<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Exception;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$teachers = Teacher::all();
        $teachers = Teacher::orderBy('id', 'asc')->withTrashed()->get(); 
        //$teachers = Teacher::orderBy('lastname', 'ASC')->orderBy('firstname', 'ASC')->get(); 
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'firstname'                 => 'required|string',
            'lastname'                  => 'required|string',
            'email'                     => 'required|string',
            'phone_number'              => 'nullable|numeric',
        ];

        $validated = $request->validate($rules);
        try {
            $d = Teacher::create([
            'firstname'                 => $request['firstname'],
            'lastname'                  => $request['lastname'],
            'email'                     => $request['email'],
            'phone_number'              => $request['phone_number'],
        ]);
        session()->flash('success', 'Teacher record created');
        return redirect()->route('teachers.index');

        }catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }  
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit')->with('teacher', Teacher::find($teacher->id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $rules = [
            'firstname'                 => 'required|string',
            'lastname'                  => 'required|string',
            'email'                     => 'required|email',
            'phone_number'              => 'nullable|numeric',
        ];

        $validated = $request->validate($rules);

        $d = Teacher::find($teacher->id);
        $d->firstname          = $request->firstname;
        $d->lastname           = $request->lastname;
        $d->email              = $request->email;
        $d->phone_number       = $request->phone_number;

        try {
            $d->save();
            session()->flash('success', 'Teacher ' . $teacher->title . ' updated');
            return redirect()->route('teachers.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //Course::find($course->id)->delete();
        //return redirect()->route('courses.index');

        try {
            $teacher->delete();
            session()->flash('success', 'Teacher ' . $teacher->title . ' deleted');
            return redirect()->route('teachers.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }  
    }

    public function forceDestroy($id)
    {
        try {
            Teacher::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'Teacher record was permanently deleted');
            return redirect()->route('teachers.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            Teacher::withTrashed()->find($id)->restore();
            session()->flash('success', 'Teacher restored');
            return redirect()->route('teachers.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }
}
