@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Adding a New Subject</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::open(['route' => 'subjects.store']) }}

            {{ Form::label('id_course', 'Subject id') }}
            {{ Form::text('id_course', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('name_course', 'Subject name') }}
            {{ Form::text('name_course', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('abbreviations_course', 'Abbreviations') }}
            {{ Form::text('abbreviations_course', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('guarantor_course', 'Guarantor of the subject') }}
            {{ Form::select('guarantor_course', $listOfTeachers, null, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection