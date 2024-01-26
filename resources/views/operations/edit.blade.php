@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update a Operation: {{ $operation->title }}</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($operation, ['route' => ['operations.update', $operation->id], 'method' => 'PUT']) }}

            {{ Form::label('id_course', 'Operation id') }}
            {{ Form::text('id_course', $operation->id_course, array('class' => 'form-control mb-3')) }}

            {{ Form::label('name_course', 'Operation name') }}
            {{ Form::text('name_course', $operation->name_course, array('class' => 'form-control mb-3')) }}

            {{ Form::label('abbreviations_course', 'Abbreviations') }}
            {{ Form::text('abbreviations_course', $operation->abbreviations_course, array('class' => 'form-control mb-3')) }}

            {{ Form::label('guarantor_course', 'Guarantor of the operation') }}
            {{ Form::select('guarantor_course',$listOfTeachers, $operation->guarantor_course, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection