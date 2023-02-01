@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    
    <div>
    
    <p>Content : {{ $post->content }}</p>

    <ul class="list-group">
        <li class="list-group-item text-muted">Created {{ $post->created_at->diffForHumans() }}</li>
    </ul>

    @if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5 )
        <strong>New!</strong>
    @endif

    <p>

    </p>

    </div>

    <ul class="list-group">
        <li class="list-group-item">
            <h3>Comments</h3>
            <div>
                @forelse($post->comments as $comment)
            <p> 
                {{ $comment->content }}
                </p>

                <p class="list list-group text text-muted">
                    added {{ $comment->created_at->diffForHumans() }}
        </p>

        @empty
            <p class="text-warning">No comments yet!</p>
        @endforelse
            </li>
        </div>

    </ul>
    @endsection('content')