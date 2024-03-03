<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Main Page</h1>
    <div>
        @if(count($tasks) > 0)
            @foreach($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{ $task->title }}</a>
                </div>
            @endforeach
        @else
            <div>There are no tasks!</div>
        @endif
    </div>
</body>
</html>
