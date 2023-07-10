<x-app-layout>
    <x-slot name='header'>
        Index
    </x-slot>
    <h1>Blog</h1>
    <a href='/posts/create'>create</a>
    <div class='questions'>
        @foreach($questions as $question)
        <div class='title'>
            <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
                </a>
        </div>
        @endforeach
    </div>
    <div class='posts'>
        @foreach ($posts as $post)
         <div class='post'>
          <h2 class='title'>
              <a href="/posts/{{$post->id}}">
                  {{$post->title}}
              </a>
          </h2>
          <a href='/categories/{{$post->category->id}}'>{{ $post->category->name }}</a>
          <small>{{ $post->user->name }}</small>
          <p class='body'>{{$post->body}}</p>
          <form action='/posts/{{$post->id}}' id='form_{{$post->id}}'method='post'>
              @csrf
              @method('DELETE')
              <button type='button' onclick='deletePost({{$post->id}})'>delete</button>
          </form>
         </div>
        @endforeach
    </div>
    <div class='user_name'>
        <p>ログインユーザー:{{ Auth::user()->name }}</p>
    </div>
    <div class='paginate'>
        {{$posts->links()}}
    </div>
    <script>
        function deletePost(id){
            'use strict'
            
            if(confirm('削除すると復元できません\n本当に削除しますか?')){
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>