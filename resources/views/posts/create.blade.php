<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Create a new post</title>
</head>
<body>
    <h1>Create a new post</h1>
    <form action='/posts' method='POST'>
        @csrf
        <div class='title'>
            <h2>Title</h2>
            <input type='text' name='post[title]' placeholder='タイトル'/>
        </div>
        <div class='body'>
            <h2>Body</h2>
            <textarea name="post[body]" placeholder='本文を入力'></textarea>
        </div>
        <input type='submit' value='保存'/>
    </form>
    <div class='footer'>
        <a href='../'>戻る</a>
    </div>
</body>
</html>