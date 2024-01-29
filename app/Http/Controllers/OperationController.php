<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use Exception;
use Barryvdh\DomPDF\Facade\Pdf;


class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operations = Operation::with('teacher', 'subject')->orderBy('id', 'asc')->withTrashed()->get(); 
        return view('operations.index')->with('operations', $operations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Subjects = Subject::orderBy('name_course', 'asc')->get();
        $listOfSubjects[0] = '-----';
        foreach ($Subjects as $Subject) {
            $listOfSubjects[$Subject->id] = $Subject->name_course;
        }

        $Teachers = Teacher::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->get();
        $listOfTeachers[0] = '-----';
        foreach ($Teachers as $Teacher) {
            $listOfTeachers[$Teacher->id] = $Teacher->lastname . ' ' . $Teacher->firstname;
        }

        return view('operations.create')->with('listOfTeachers', $listOfTeachers)->with('listOfSubjects', $listOfSubjects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'course_id'                 => 'required|string',
            'day'                       => 'required|string',
            'class_start'               => 'required|numeric',
            'class_end'                 => 'required|numeric',
            'room'                      => 'required|string',
            'circle'                    => 'required|string',
            'year'                      => 'required|string',
            'form'                      => 'required|string',
            'teacher_id'                => 'required|string',
        ];

        $validated = $request->validate($rules);
        try {
            $d = Operation::create([
            'course_id'             => $request['course_id'],
            'day'                   => $request['day'],
            'class_start'           => $request['class_start'],
            'class_end'             => $request['class_end'],
            'room'                  => $request['room'],
            'circle'                => $request['circle'],
            'year'                  => $request['year'],
            'form'                  => $request['form'],
            'teacher_id'            => $request['teacher_id'],
        ]);
        session()->flash('success', 'Operation record created');
        return redirect()->route('operations.index');

        }catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }  
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operation $operation)
    {
        $Teachers = Teacher::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->get();
        $listOfTeachers[0] = '-----';
        foreach ($Teachers as $Teacher)
        {
            $listOfTeachers[$Teacher->id] = $Teacher->lastname . ' ' . $Teacher->firstname;
        }

        $Subjects = Subject::orderBy('name_course', 'asc')->get();
        $listOfSubjects[0] = '-----';
        foreach ($Subjects as $Subject) {
            $listOfSubjects[$Subject->id] = $Subject->name_course;
        }

        return view('operations.edit')->with('operation', Operation::find($operation->id))->with('listOfTeachers', $listOfTeachers)->with('listOfSubjects', $listOfSubjects);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Operation $operation)
    {
        $rules = [
            'course_id'                 => 'required|string',
            'day'                       => 'required|string',
            'class_start'               => 'required|numeric',
            'class_end'                 => 'required|numeric',
            'room'                      => 'required|string',
            'circle'                    => 'required|string',
            'year'                      => 'required|string',
            'form'                      => 'required|string',
            'teacher_id'                => 'required|string',
        ];

        $validated = $request->validate($rules);

        $d = Operation::find($operation->id);
        $d->course_id             = $request->course_id;
        $d->day                   = $request->day;
        $d->class_start           = $request->class_start;
        $d->class_end             = $request->class_end;
        $d->room                  = $request->room;
        $d->circle                = $request->circle;
        $d->year                  = $request->year;
        $d->form                  = $request->form;
        $d->teacher_id            = $request->teacher_id;

        try {
            $d->save();
            session()->flash('success', 'Operation ' . $operation->title . ' updated');
            return redirect()->route('operations.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operation $operation)
    {
        try {
            $operation->delete();
            session()->flash('success', 'Operation ' . $operation->title . ' deleted');
            return redirect()->route('operations.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        } 
    }

    public function forceDestroy($id)
    {
        try {
            Operation::withTrashed()->find($id)->forceDelete();
            session()->flash('success', 'Operation was permanently deleted');
            return redirect()->route('operations.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function restore($id)
    {
        try {
            Operation::withTrashed()->find($id)->restore();
            session()->flash('success', 'Operation restored');
            return redirect()->route('operations.index');
        } catch (Exception $e) {
            session()->flash('failure', $e->getMessage());
            return redirect()->back();
        }
    }

    public function exportPDF()
    {
        $operations = Operation::with(['subject'])->get(); 
        foreach ($operations as $op){
            foreach ($op->subject as $d){
                dd($d);
            }

        }

        $array = [];
        $data = compact('operations', 'array');
        $pdf = Pdf::loadView('pdf.subjects_in_room', $data);
        return $pdf->stream('subjects.pdf');                    //stream, download
    }

    public function timetable()
    {
        $operations = Operation::with('teacher', 'subject')->orderBy('id', 'asc')->withTrashed()->get(); 
        return view('timetable')->with('operations', $operations);
    }
}
