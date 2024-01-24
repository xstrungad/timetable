@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">List of Subjects</h3>
    <p><a href="{{ route('subjects.create') }}" class="btn btn-secondary">Add New Subject</a></p>
    <table class="table table-striped table-hover" id="dataTable">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>abbreviations</th>
                <th>guarantor</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        </tbody>
            @foreach ($subjects as $d)
            <tr>
                <td>{{$d->id_course}}</td>
                <td>{{$d->name_course}}</td>
                <td>{{$d->abbreviations_course}}</td>
                <td>{{$d->teacher->teacher_full_name_reverse}}</td>
                <td><a class="btn btn-info" href="{{ route('subjects.edit', $d->id) }}">Edit</a></td>
                <td>
                    @if(!$d->trashed())
                    {!! Form::open(array('route' => ['subjects.destroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm("You are about to delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    @else
                    {!! Form::open(array('route' => ['subjects.forceDestroy', $d->id], 'method'=>'DELETE')) !!}
                    {!! Form::submit('Permanent Delete', array('class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("You are about to PERMANENTLY delete the teacher record.")')) !!}
                    {!! Form::close() !!}
                    {!! Form::open(array('route' => ['subjects.restore', $d->id], 'method'=>'POST')) !!}
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