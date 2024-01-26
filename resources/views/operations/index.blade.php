@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">List of Operations</h3>
    <p><a href="{{ route('operations.create') }}" class="btn btn-secondary">Add New Operation</a></p>
    <table class="table table-striped table-hover" id="dataTable">
        <thead>
            <tr>
                <th>id</th>
                <th>course</th>
                <th>day</th>
                <th>class_start</th>
                <th>class_end</th>
                <th>room</th>
                <th>circle</th>
                <th>year</th>
                <th>form</th>
                <th>teacher</th>
            </tr>
        </thead>
        </tbody>
            @foreach ($operations as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->course}}</td>
                <td>{{$d->day}}</td>
                <td>{{$d->class_start}}</td>
                <td>{{$d->class_end}}</td>
                <td>{{$d->room}}</td>
                <td>{{$d->circle}}</td>
                <td>{{$d->year}}</td>
                <td>{{$d->form}}</td>
                <td>{{$d->teacher}}</td>
                <td><a class="btn btn-info" href="{{ route('operations.edit', $d->id) }}">Edit</a></td>
                <td>
                    @if(!$d->trashed())
                    {!! Form::open(array('route' => ['operations.destroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    @else
                    {!! Form::open(array('route' => ['operations.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    {!! Form::open(array('route' => ['operations.restore', $d->id], 'method'=>'POST')) !!}
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