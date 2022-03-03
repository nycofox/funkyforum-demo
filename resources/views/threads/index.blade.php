<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @foreach($threads as $thread)
        <div>
            <h3 class="text-2xl">{{ $thread->title }}</h3>
            <article class="mt-2">{{ $thread->body }}</article>
        </div>
    @endforeach
</body>
</html>
