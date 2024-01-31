@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">List of Operations</h3>
    <p><a href="{{ route('operations.create') }}" class="btn btn-secondary">Add New Operation</a>
        <a href="{{ route('exportXLS') }}" class="btn btn-success">Export of Teacher to Excel</a></p>
    <table class="table table-striped table-hover" id="dataTable">
        <thead>
            <tr>
                <th>id</th>
                <th>course</th>
                <th>day</th>
                <th>class start</th>
                <th>class end</th>
                <th>room</th>
                <th>circle</th>
                <th>year</th>
                <th>form</th>
                <th>teacher</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        </tbody>
            @foreach ($operations as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->subject->name_course ?? null}}</td>
                <td>{{$d->day}}</td>
                <td>{{$d->class_start}}</td>
                <td>{{$d->class_end}}</td>
                <td>{!! Form::open(array('route' => ['exportPDF', $d->id], 'method'=>'POST', 'target' => '_blank')) !!}
                    {{-- {!! Form::submit("{{ $d->room }}", array('class' => 'btn btn-success btn-sm mt-1')) !!} --}}
                    <button class="btn btn-success btn-sm mt-1" value="{{ $d->room }}">{{ $d->room }}</button>
                    {!! Form::close() !!}</td>
                <td>{{$d->circle}}</td>
                <td>{{$d->year}}</td>
                <td>{{$d->form}}</td>
                <td>{{$d->teacher->teacher_full_name_reverse ?? null}}</td>
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