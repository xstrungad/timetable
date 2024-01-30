<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
        

    <body style="font-family: DejaVu Sans">

        <h1>{{ __($array['title']) }} {{ $save[$rooms-1] }}</h1>

        <table>
            <th>course id</th>
            <th>course name</th>
                    @foreach ($operations as $op)
            <tr>
                @if ($op->room == $save[$rooms-1])
                    <td>{{$op->subject->id_course}}</td>
                    <td>{{$op->subject->name_course}}</td>
                @endif
            </tr>
            @endforeach
        </table>
    </body>
</html>