@extends('layouts.app')
@section('content')

<div class="container">
    <h3 class="mb-5">Timetable</h3>
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
                <td>{{$d->room}}</td>
                <td>{{$d->circle}}</td>
                <td>{{$d->year}}</td>
                <td>{{$d->form}}</td>
                <td>{{$d->teacher->teacher_full_name_reverse ?? null}}</td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection