@extends('layouts.app')

@section('content')

<style>
    body {
        background: url('../imagen/prenda.jpg');
        background-size: 100% 110%;
        position: relative;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
    }




    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a {
        margin: 0;
        padding: 0;
    }

    .login {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin: 0 auto;
        max-width: 500px;
        position: relative;
    }

    .login-header {
        color: #fff;
        text-align: center;
        font-size: 300%;
        position: relative;
    }

    /* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */

    .login-form {

        background: #505050;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #000;
        position: relative;
        
    }

    .login-form h3 {
        text-align: left;
        font-size: small;
        margin-left: 40px;
        color: #fff;
        position: relative;
    }

    .login-form {
        box-sizing: border-box;
        padding-top: 15px;
        padding-bottom: 10%;
        margin: 5% auto;
        text-align: center;
        position: relative;
        width: 400px;
        height: 100px;

    }

    .login input[type="text"],
    .login input[type="password"] {
        max-width: 900px;
        width: 80%;
        line-height: 3em;
        font-family: 'Ubuntu', sans-serif;
        margin: 1em 2em;
        border-radius: 5px;
        border: 2px solid #f2f2f2;
        outline: none;
        padding-left: 10px;
        position: relative;
    }

    .login-form input[type="button"] {
        height: 30px;
        width: 100px;
        background: #fff;
        border: 1px solid #f2f2f2;
        border-radius: 20px;
        color: slategrey;
        text-transform: uppercase;
        font-family: 'Ubuntu', sans-serif;
        cursor: pointer;
        position: relative;
    }

    .sign-up {
        color: #f2f2f2;
        margin-left: -70%;
        cursor: pointer;
        text-decoration: underline;
        position: relative;
    }

    .no-access {
        color: #E86850;
        margin: 20px 0px 20px -57%;
        text-decoration: underline;
        cursor: pointer;
        position: relative;
    }

    .try-again {
        color: #f2f2f2;
        text-decoration: underline;
        cursor: pointer;
        position: relative;
    }

    /*Media Querie*/
    @media only screen and (min-width : 150px) and (max-width : 530px) {
        .login-form h3 {
            text-align: center;
            margin: 0;
            position: relative;
        }

        .sign-up,
        .no-access {
            margin: 10px 0;
            position: relative;
        }

        .login-form button {
            margin-bottom: 10px;
            position: relative;

        }


    }
</style>


<body>
    <div>
        <div>


            <div class="tienda" style="text-align:center;color:#000;font-size:50px;font-family:cursive;margin-top:5%" >
                <br>
                TIENDA
            </div>

                <br>

                <div class="login-form">

                    <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                                <div class="col-6">
                                    <a class="btn btn-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


<br>

</body>
@endsection
