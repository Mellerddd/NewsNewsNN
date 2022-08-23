@extends('layouts.app')

@section('content')
    @foreach($posts as $post) 
    <div class="content-posts">
        <div class="posts">
        <p id="posts_title"> {{ $post->title }}</p> 
        </div>
        <hr>
        <div class="posts">
        <p id="posts_description">{{ $post->description }}</p></p>
        </div>
        <a class="text_comment" href="{{ route('comment.leave') }}" style="text-decoration:none;font-size: 18px;color: black;">Прокомментировать</a>
        <a class="text_comment1" href="{{ route('reviews') }}" style="text-decoration:none;font-size: 18px;color: black;">Комментарии</a>
    </div>
    @endforeach
@endsection
