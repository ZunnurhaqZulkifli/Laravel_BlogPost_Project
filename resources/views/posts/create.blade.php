@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">

        @csrf
        
        @include('posts.form')
        
        <br>

        <button class="mx-auto btn btn-success btn-block border-bottom shadow" type="submit" style="width:1300px;">Create!</button>

    </form>

@endsection('content')