<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Edit your post</title>
</head>
<body>
    <h1>Edit your post</h1>
    <form action='/posts/{{$post->id}}' method='POST'>
        @csrf
        @method('PUT')
        <div class='content_title'>
            <h2>Title</h2>
            <input type='text' name='post[title]' placeholder='タイトル' value='{{$post->title}}'/>
            <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div class='content_body'>
            <h2>Body</h2>
            <textarea name="post[body]" placeholder='本文を入力'>{{$post->body}}</textarea>
            <p class='body_error' style='color:red'>{{$errors->first('post.body')}}</p>
        </div>
        <input type='submit' value='保存'/>
    </form>
    <div class='footer'>
        <a href='/'>戻る</a>
    </div>
</body>
</html>