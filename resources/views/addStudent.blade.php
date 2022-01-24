<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home | index</title>
</head>
<body>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('create.student')}}" method="post">
    @csrf

    <input type="text" name="name" placeholder="username">

    <input type="text" name="job" placeholder="job">

    <input type="submit" value="send">
</form>
</body>
</html>

