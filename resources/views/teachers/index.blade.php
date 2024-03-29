@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">List of Teachers</h3>
    <p><a href="{{ route('teachers.create') }}" class="btn btn-secondary">Add New Teacher</a></p>
    <table class="table table-striped table-hover" id="dataTable">
        <thead>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>phone number</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        </tbody>
            @foreach ($teachers as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->firstname}}</td>
                <td>{{$d->lastname}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone_number}}</td>
                <td><a class="btn btn-info" href="{{ route('teachers.edit', $d->id) }}">Edit</a></td>
                <td>
                    @if(!$d->trashed())
                    {!! Form::open(array('route' => ['teachers.destroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    @else
                    {!! Form::open(array('route' => ['teachers.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    {!! Form::open(array('route' => ['teachers.restore', $d->id], 'method'=>'POST')) !!}
                    {!! Form::submit('Restore', array('class' => 'btn btn-success btn-sm mt-1')) !!}
                    {!! Form::close() !!}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection