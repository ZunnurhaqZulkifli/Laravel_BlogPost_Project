@extends('layout')

@section('content')

    <br>

        <p class="display-6 font-weight-bold text-dark">All Blog Posts</p>
        
    <br>

    @forelse ($posts as $post)
        <p>
            <h6>
                {{-- <h3 class="my-0 mr-md-auto font-weight-normal text-light">Laravel Blog</h3> --}}
                <div class="card border-warning p-4 mb-1 alert alert-warning shadow" style="max-width: 1300px;">
                    <ul class="list-group">

                        <a class="h4 p-4 mb-1 list-group-item" href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>

                        <div>

                            @if($post->comments_count)
                                <p class="p-1 mb-1 h6 text-success">{{ $post->comments_count }} comments</p>
                            @else
                                <p class="p-1 mb-1 h6 text-warning">No comments yet!</p>
                            @endif

                        </div>

                        <div class="btn-group">

                            <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                                
                                @csrf
                                @method('DELETE')
                                
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary btn-lg">Edit</a>
                            {{-- <button type="submit" value="Delete" class="btn btn-warning btn-lg">Delete</button> --}}
            
                            
                            <button type="submit" value="Delete" class="btn btn-warning btn-lg">Delete</button>
                            
                        </form>
                        </div>
                        
                    </ul>
            
                </div>
            </h6>

        </p>
        
        <hr class="text-muted">

    @empty

        <p>No blog posts yet!</p>

    @endforelse

@endsection('content')