<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home | index</title>
</head>
<body>


    <a href="{{route('add.student')}}">add new student</a>

    @if(session('done'))
        {{session('done')}}
    @endif

    <table border="1">
        <tr>
            <th>name</th>
            <th>job</th>
            <th>delete</th>
        </tr>

        @foreach($data as $val)

        <tr>
            <th>{{$val->name}}</th>
            <th>{{$val->job}}</th>
            <th>
                <form action="{{route('delete.student')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$val->id}}">
                    <input type="submit" value="delete">
                </form>
            </th>
        </tr>

        @endforeach
    </table>
</body>
</html>
