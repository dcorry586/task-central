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

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1>Please sign up</h1>
    <div class="mb-3">

    <div class="form-floating">

        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Name') }}" required autocomplete="email" autofocus>
         <label for="floatingInput">Name</label>
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
      </div>

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
  

      <div class="form-floating">

        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

       
        <label for="password-confirm">{{ __('Confirm Password')}}</label>
        
      </div>
  

            <br>
    <button type="submit" class="btn btn-primary btn-lg w-100">Register</button>
                    <br><br>
    <a  href="{{ route('login') }}">
        <button type="button" class="w-100 btn btn-lg btn-outline-danger">Already have an account?</button>

    </a>

  </form>

</div>

@endsection
