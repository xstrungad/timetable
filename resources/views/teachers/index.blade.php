@extends('layouts.app')
@section('content')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>phone number</th>
        </tr>
    </thead>
    </tbody>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->firstname}}</td>
            <td>{{$teacher->lastname}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->phone_number}}</td>
        </tr>
        @endforeach
    </tbody>    
</table>

@endsection