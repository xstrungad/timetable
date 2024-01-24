@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Update a Teacher: {{ $teacher->title }}</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::model($teacher, ['route' => ['teachers.update', $teacher->id], 'method' => 'PUT']) }}

            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', $teacher->firstname, array('class' => 'form-control mb-3')) }}

            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', $teacher->lastname, array('class' => 'form-control mb-3')) }}

            {{ Form::label('email', 'E-mail') }}
            {{ Form::text('email', $teacher->email, array('class' => 'form-control mb-3')) }}

            {{ Form::label('phone_number', 'Phone Number') }}
            {{ Form::text('phone_number', $teacher->phone_number, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection