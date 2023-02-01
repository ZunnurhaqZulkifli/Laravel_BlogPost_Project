@extends('layout')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label>Name</label> 
            <input name="name" value="{{ old('name') }}" required class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}">


            @if ($errors->has('name'))

            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>

        <p>

        </p>

        <div class="form-group">
        <label>E-mail</label> 
            <input name="email" value="{{ old('email') }}" required class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}">
            
            @if ($errors->has('email'))

            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <p>
            
        </p>

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
        <label>Retyped Password</label> 
            <input name="password_confirmation" value="" required class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}">
        </div>
        
        <p>
            
        </p>
        
        <button type="submit" class="mx-auto btn btn-primary btn-block" style="width: 1300px;">Register!</button>
    </form>

@endsection('content')