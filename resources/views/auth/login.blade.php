@extends('layouts.app')

@section('content')
    <style>

        .card-auth {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-header {
            color: dimgrey;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            max-width: 420px;
            border: 1px solid black;
            border-radius: 5px;
            padding: 15px;
        }

        .form-group {
            align-items: center;
        }

        .form-control {
            border: 1px solid grey;
            height: 30px;
        }

        .btn-login {
            border: 1px solid red;
            border-radius: 5px;
            height: 30px;
            width: 100%;
        }




    </style>
    <div class="container">
        <div class="card-auth">

            <div class="card-header">
                <h3>{{ __('auth.Login_title') }}</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="">{{ __('auth.Password') }}</label>

                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('auth.Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="">
                            <button type="submit" class="btn-login">
                                {{ __('auth.Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
