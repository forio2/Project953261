@extends('layouts.app')

@section('content')
<body style="background-image: linear-gradient(150deg, rgba(2, 30, 89, 0.6) 30%, rgba(93, 191, 54, 0.7)), url('https://s7d2.scene7.com/is/image/TWCNews/classroom_12_jpg1280x720jpg?wid=1250&hei=703&$wide-bg$') ;
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;">
<div class="img-fluid" style='height: max-content;
                              width: auto;
                              background-position: 0%, 0%, 50%, 50%;
                              background-attachment: scroll, fixed;
                              background-size: auto, cover;'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="logo-wrapper col-auto" style='font-family: Raleway, sans-serif;
                                                      padding: 140px 30px;
                                                      text-align: center;
                                                      position: relative;'>

                <div class="card" style='width: 600px' >
                    <div class="card-header" style="font-weight: bold; font-size: 30px">{{ __('Login') }}</div>

                    <div class="card-body" style='width: 500px'>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" style='width: 320px' class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" style='width: 320px' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-dark btn-lg btn-block">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
    </div>
</div></body>
@endsection

