@extends('layouts.app')
@section('content')
<section class="form-container">
    <form action="{{ route('login')}}" method="POST">
         @csrf
        <h3>login now</h3>
        <div>
            <input id="email" type="email" placeholder="enter your email" class="box form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <input id="password" required maxlength="20" type="password" placeholder="enter your password" class="box form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="box">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <button type="submit" class="btn">{{ __('Login') }}</button>
        @if (Route::has('password.request'))
        <p>
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a></p>
        @endif
        <p>don't have an account? <a href="{{route('register')}}">register now</a></p>
    </form>
</section>
@endsection
