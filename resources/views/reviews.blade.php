@extends('layouts.app')

@section('content')
    @foreach($comments as $comment)
    <div class="content_comment">
        <p id="comment_db">{{ $comment->user->username }} | {{ $comment->created_at }} |</p> 
        <p id="comment_db">{{ $comment->description }}</p>
    </div>
        @endforeach
@endsection
