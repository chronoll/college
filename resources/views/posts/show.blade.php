<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>
<body>
    <h1 class="title">{{$post->title}}</h1>
    <div class="content">
        <div class="content_post">
            <h3>本文</h3>
            <p>{{$post->body}}</p>
        </div>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>