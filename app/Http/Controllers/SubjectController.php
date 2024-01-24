<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Exception;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::with('teacher')->orderBy('id', 'asc')->withTrashed()->get(); 
        return view('subjects.index')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Teachers = Teacher::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->get();
        $listOfTeachers[0] = '-----';
        foreach ($Teachers as $Teacher) {
            $listOfTeachers[$Teacher->id] = $Teacher->lastname . ' ' . $Teacher->firstname;
        }

        return view('subjects.create')->with('listOfTeachers', $listOfTeachers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'id_course'                 => 'required|string',
            'name_course'               => 'required|string',
            'abbreviations_course'      => 'required|string',
            'guarantor_course'          => 'required|string',
        ];

        $validated = $request->validate($rules);
        try {
            $d = Subject::create([
            'id_course'                    => $request['id_course'],
            'name_course'                  => $request['name_course'],
            'abbreviations_course'         => $request['abbreviations_course'],
            'guarantor_course'             => $request['guarantor_course'],
        ]);
        session()->flash('success', 'Subject record created');
        return redirect()->route('subjects.index');

        }catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $Teachers = Teacher::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->get();
        $listOfTeachers[0] = '-----';
        foreach ($Teachers as $Teacher) {
            $listOfTeachers[$Teacher->id] = $Teacher->lastname . ' ' . $Teacher->firstname;
        }

        return view('subjects.edit')->with('subject', Subject::find($subject->id))->with('listOfTeachers', $listOfTeachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $rules = [
            'id_course'                 => 'required|string',
            'name_course'               => 'required|string',
            'abbreviations_course'      => 'required|string',
            'guarantor_course'          => 'required|string',
        ];

        $validated = $request->validate($rules);

        $d = Subject::find($subject->id);
        $d->id_course             = $request->id_course;
        $d->name_course           = $request->name_course;
        $d->abbreviations_course  = $request->abbreviations_course;
        $d->guarantor_course      = $request->guarantor_course;

        try {
            $d->save();
            session()->flash('success', 'Subject ' . $subject->title . ' updated');
            return redirect()->route('subjects.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
            session()->flash('success', 'Subject ' . $subject->title . ' deleted');
            return redirect()->route('subjects.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        } 
    }

    public function forceDestroy($id)
    {
        try {
            Subject::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'Subject was permanently deleted');
            return redirect()->route('subjects.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            Subject::withTrashed()->find($id)->restore();
            session()->flash('success', 'Subject restored');
            return redirect()->route('subjects.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }
}
