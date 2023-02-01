@extends('layout')

@section('content')
    <form method="POST" 
          action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')

        @include('posts.form')
        <p>
            
        </p>
        <button type="submit" class="mx-auto btn btn-warning btn-block border-bottom shadow" style="width:1300px;">Update!</button>
    </form>

@endsection('content')