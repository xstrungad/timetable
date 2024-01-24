@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Adding a New Teacher</h3>
    <div class="row">
        <div class="col-8">
            {{ Form::open(['route' => 'teachers.store']) }}

            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('email', 'E-mail') }}
            {{ Form::text('email', null, array('class' => 'form-control mb-3')) }}

            {{ Form::label('phone_number', 'Phone Number') }}
            {{ Form::text('phone_number', null, array('class' => 'form-control mb-3')) }}

            {{ Form::submit('Submit', array('class' => 'btn btn-sm btn-primary')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection