<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>
<body>
    <div class='edit'><a href='/posts/{{$post->id}}/edit'>Edit</a></div>
    <h1 class="title">{{$post->title}}</h1>
    <a href='/categories/{{$post->category->id}}'>{{ $post->category->name }}</a>
    <small>{{ $post->user->name }}</small>
    <div class="content">
        <div class="content_post">
            <h3>本文</h3>
            <p>{{$post->body}}</p>
        </div>
        @if($post->image)
        <div class='image'>
            <img src="{{ $post->image }}" alt="画像が読み込めません。"/>
        </div>
        @endif
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>