<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/style/styles/Login-Regis.css">
    <link rel="stylesheet" href="/style/style.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="area">
        <div class="Login-Regis">
            <div class="extra">
                <img src="/style/assets/Login.png" alt="">
            </div>
            <div class="form">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <h1>Login</h1>
                    <div class="box-input form-group">
                        <label for="validationDefault01 email"></label>
                        <img src="/style/assets/users-solid.svg" alt="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="validationDefault01" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="box-input form-group">
                        <label for="validationDefault02"></label>
                        <img src="/style/assets/key-solid.svg" alt="">
                        <input id="password validationDefault02" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
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


                    
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                
                </form>
                
                <a href="regis">Create an Account</a>
            </div>
        </div>
    </div>
    <script src="/style/jquery.js"></script>
</body>
</html>