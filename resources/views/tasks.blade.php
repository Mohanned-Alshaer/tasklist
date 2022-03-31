<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul {
        list-style: none;
    }
    li {
        margin-bottom: 10px
    }
    a {
        text-decoration: none;
        color: #fff;
        background-color: black;
        padding: 5px;
        border-radius: 20px;
    }
    a:hover {
        color: red;
    }
</style>
<body>
    <ul>
        @foreach ($tasks as $task)
        <li><a href="/task/{{$task->id}}">{{$task->name}}</a></li>
        <li>{{$task->discription}}</li>
        @endforeach
    </ul>
</body>
</html>