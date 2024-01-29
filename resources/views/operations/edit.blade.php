@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update a Operation: {{ $operation->title }}</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($operation, ['route' => ['operations.update', $operation->id], 'method' => 'PUT']) }}

            {{ Form::label('course_id', 'Course id') }}
            {{ Form::select('course_id', $listOfSubjects, $operation->course_id, array('class' => 'form-control mb-3')) }}

            {{ Form::label('day', 'Day') }}
            {{ Form::select('day', [0 => '-----', 'Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday',
             'Thursday' => 'Thursday', 'Friday' => 'Friday'], $operation->day, array('class' => 'form-control')) }}

            {{ Form::label('class_start', 'Class start') }}
            {{ Form::select('class_start', [0 => '-----', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12',
             13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18'], $operation->class_start, array('class' => 'form-control')) }}

            {{ Form::label('class_end', 'Class end') }}
            {{ Form::select('class_end', [0 => '-----', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12',
            13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18', 19 => '19'], $operation->class_end, array('class' => 'form-control')) }}

            {{ Form::label('room', 'Room') }}
            {{ Form::text('room', $operation->room, array('class' => 'form-control mb-3')) }}

            {{ Form::label('circle', 'Circle') }}
            {{ Form::text('circle', $operation->circle, array('class' => 'form-control mb-3')) }}

            {{ Form::label('year', 'Year') }}
            {{ Form::text('year', $operation->year, array('class' => 'form-control mb-3')) }}

            {{ Form::label('form', 'Form') }}
            {{ Form::select('form', [0 => '-----', 'Lecture' => 'Lecture', 'Seminar' => 'Seminar', 'Laboratory exercise' => 'Laboratory exercise', 'Exercise' => 'Exercise',
             'Project' => 'Project'], $operation->form, array('class' => 'form-control')) }}

            {{ Form::label('teacher_id', 'Teacher') }}
            {{ Form::select('teacher_id', $listOfTeachers, $operation->teacher_id, array('class' => 'form-control mb-3')) }}

            
            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection