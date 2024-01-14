@extends('layouts.app')
@section('content')
<div class="container">
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
            @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->firstname}}</td>
                <td>{{$subject->lastname}}</td>
                <td>{{$subject->email}}</td>
                <td>{{$subject->phone_number}}</td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection