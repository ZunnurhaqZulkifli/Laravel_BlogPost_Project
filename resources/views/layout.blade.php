<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>

    <body>
        <div class="navbar navbar-dark d-flex flex-column flex-md-row align-items-right p-3 px-md-4 mb-3 bg-dark border-bottom shadow">
            <h3 class="my-0 mr-md-auto font-weight-normal text-light">Laravel Blog</h3>
            <nav class=" bg-dark my-2 my-md-0 mr-md-3">
                <a class="btn btn-outline-primary" href="{{ route('home') }}">Home</a>
                <a class="btn btn-outline-primary" href="{{ route('contact') }}">Contact</a>
                <a class="btn btn-outline-primary" href="{{ route('posts.index') }}">Blog Posts</a>
                <a class="btn btn-outline-primary" href="{{ route('posts.create') }}">Add</a>
                
                {{-- <a class="btn btn-outline-primary" href="{{ route('zunnur') }}">Zunnur</a> --}}
                {{-- <div> --}}
                    @guest
                        @if (Route::has('register'))
                            <a class="btn btn-outline-success" href="{{ route('register') }}">Register</a>
                        @endif
                            <a class="btn btn-outline-danger" href="{{ route('login') }}">Login</a>
                    @else
                        <a class="btn btn-outline-warning" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            >Logout ({{ Auth::user()->name }})</a>
                
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                            style="display: none;"> 
                            @csrf
                            </form>
                    @endguest
                {{-- </div> --}}

            </nav>
        </div>

        <div class="container">
            @if(session()->has('status'))
                <p style="color: green">
                    {{ session()->get('status') }}
                </p>
            @endif

            @yield('content')
            
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>