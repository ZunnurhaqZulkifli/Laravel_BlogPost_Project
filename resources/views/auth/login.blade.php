@extends('layout')

@section('content')

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label>E-mail</label> 
                <input name="email" value="{{ old('email') }}" required class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}">
            
            @if ($errors->has('email'))

            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <br>

        <div class="form-group">
            <label>Password</label> 
                <input name="password" required type="password" required class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}">
                
                @if ($errors->has('password'))

                <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

        </div>
    <p>

    </p>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" value="{{ old('remember') ? 'checked': '' }}">


                <label class="form-check-label" for="remember">
                    Remember Me!
            </label>
        </div>
        
        <p>

        </p>

        <button type="submit" class="mx-auto btn btn-primary btn-block" style="width: 1300px;">Login</button>

    </form>


@endsection('content')