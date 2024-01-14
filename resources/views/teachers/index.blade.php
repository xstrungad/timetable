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
            @foreach ($teachers as $d)
            <tr @if($d->trashed())class="table-danger"@endif>
                <td>{{$d->id}}</td>
                <td>{{$d->firstname}}</td>
                <td>{{$d->lastname}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone_number}}</td>
                @if($d->trashed())
                <td></td>
                @endif
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection