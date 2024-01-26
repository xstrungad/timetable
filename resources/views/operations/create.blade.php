@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Adding a New Operation</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::open(['route' => 'operations.store']) }}

            {{ Form::label('course_id', 'Course id') }}
            {{ Form::text('course_id', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('day', 'Operation name') }}
            {{ Form::text('day', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('class_start', 'class_start') }}
            {{ Form::text('class_start', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('class_end', 'class_end') }}
            {{ Form::text('class_end', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('room', 'Room') }}
            {{ Form::text('room', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('circle', 'Circle') }}
            {{ Form::text('circle', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('year', 'Year') }}
            {{ Form::text('year', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('form', 'Form') }}
            {{ Form::text('form', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('teacher_id', 'Teacher') }}
            {{ Form::select('teacher_id', $listOfTeachers, null, array('class' => 'form-control mb-3')) }}

            
            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection