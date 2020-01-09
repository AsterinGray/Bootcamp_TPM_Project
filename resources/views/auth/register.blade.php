<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="/style/styles/Login-Regis.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="area">
        <div class="Login-Regis">
            <div class="form">
                <h1>Registration</h1>
                <!-- <img src="assets/SignUp.png" alt="">  -->
                <form class="need-validation" method="POST" action="{{ route('register') }}">
                @csrf
                    <h3>Team</h3>
                    <div class="box-input form-group">
                        <!-- Username -->
                        <input id="name validationDefault01" placeholder="Group Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="box-input form-group">
                        <!-- Email -->
                        <label for="validationDefault02 inputEmail1"></label>
                        <input id="email validationDefault02 InputEmail1" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                    <div class="box-input form-group">
                        <!-- Password -->
                        <label for="validationDefault03 inputPassword1"></label>
                        <input id="password validationDefault03 inputPassword1" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    
                    </div>
                    <div class="box-input form-group">
                        <label for="validationDefault04 inputPassword2"></label>
                        <input id="password-confirm validationDefault04 inputPassword2" type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <a href="login">Already have an account ?</a>  
            </div>
        </div>
    </div>
    <script src="/style/jquery.js"></script>
</body>
</html>