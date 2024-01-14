@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>short_name</th>
                <th>teacher</th>
            </tr>
        </thead>
        </tbody>
            @foreach ($subjects as $d)
            <tr @if($d->trashed())class="table-danger"@endif>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->short_name}}</td>
                <td>{{$d->teacher->teacher_full_name_reverse}}</td>
                @if($d->trashed())
                <td></td>
                @endif
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection