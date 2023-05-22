<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <ul>
            @foreach ($pages as $page => $link)
            <li><a href="{{route($link)}}">{{$page}}</a></li>
            @endforeach
        </ul>
    </header>
    <h1>About </h1>
    <p>{{$descriptio}}</p>
</body>

</html>