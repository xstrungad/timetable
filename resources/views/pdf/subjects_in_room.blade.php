<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
        
            {{-- @foreach ($d->operation as $f) --}}
    <body style="font-family: DejaVu Sans"> List of subjects in the class {{-- {{$d->room}}--}}
                {{-- @endforeach --}}
        <table>
            <th>course id</th>
            <th>course name</th>
                    @foreach ($operations as $op)
                    @foreach ($op->subject as $d)
            <tr>
                <td>{{$d->id_course}}</td>
                <td>{{$d->name_course}}</td>
            </tr>
            @endforeach
            @endforeach
        </table>
    </body>
</html>