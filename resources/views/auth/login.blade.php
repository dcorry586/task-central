@extends('layouts.auth_views')

@section('content')

<style>


    .resetBtn {
        margin:0 auto;
    display:block;
    }

    .container {
        text-align: center;
    }
</style>

<div class="container w-25">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Login</h1>
    <div class="mb-3">

    <div class="form-floating">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
         <label for="floatingInput">Email address</label>
         @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
      </div>

    <div class="form-floating">

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="floatingPassword">Password</label>
        
      </div>
  

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
                    <br><br>
    <a  href="{{ route('register') }}">
        <button type="button" class="w-100 btn btn-lg btn-outline-danger">Don't have an account?</button>

    </a>

    @if (Route::has('password.request'))
    <a class="btn btn-link resetBtn" href="{{ route('password.request') }}">
        {{-- {{ __('Forgot Your Password?') }} --}}
        Forgotten Password?
    </a>
@endif

  </form>

</div>

@endsection
