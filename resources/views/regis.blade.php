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
                        <label for="validationDefault01">{{ __('Group Name') }}</label>
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
                        <input type="password" class="form-control" id="validationDefault03 inputPassword1" placeholder="Password" required>
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

                    <h3>Leader</h3>
                    <div class="box-input form-group">
                        <!-- Leader Full Name -->
                        <label for="validationDefault05"></label>
                        <input type="text" class="form-control" id="validationDefault05" placeholder="Full Name" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Email -->
                        <label for="validationDefault06 inputEmail2"></label>
                        <input type="email" class="form-control" id="validationDefault07 InputEmail2" placeholder="Email" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Address -->
                        <label for="validationDefault07"></label>
                        <input type="text" class="form-control" id="validationDefault07" placeholder="Address" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Phone Number -->
                        <label for="validationDefault08"></label>
                        <input type="tel" class="form-control validationDefault08" placeholder="Phone Number" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Git ID -->
                        <label for="validationDefault09"></label>
                        <input type="text" class="form-control" id="validationDefault09" placeholder="Git ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Line ID -->
                        <label for="validationDefault10"></label>
                        <input type="text" class="form-control" id="validationDefault10" placeholder="Line ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader Place of Birth -->
                        <label for="validationDefault12"></label>
                        <input type="text" class="form-control" id="validationDefault12" placeholder="Place of Birth" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Leader DOB -->
                        <label for="validationDefault11"></label>
                        <input type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault11" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader Test -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your test result</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader CV -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader Portofolio -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Upload your Portofolio (Optional)</label>
                        </div>
                    </div>

                    <h3>Member 1</h3>
                    <div class="box-input form-group">
                        <!-- Member1 Full Name -->
                        <label for="validationDefault12"></label>
                        <input type="text" class="form-control" id="validationDefault12" placeholder="Full Name" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Email -->
                        <label for="validationDefault13 inputEmail3"></label>
                        <input type="email" class="form-control" id="validationDefault13 InputEmail3" placeholder="Email" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Address -->
                        <label for="validationDefault14"></label>
                        <input type="text" class="form-control" id="validationDefault14" placeholder="Address" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Phone Number -->
                        <label for="validationDefault15"></label>
                        <input type="tel" class="form-control validationDefault15" placeholder="Phone Number" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Git ID -->
                        <label for="validationDefault16"></label>
                        <input type="text" class="form-control" id="validationDefault16" placeholder="Git ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Line ID -->
                        <label for="validationDefault17"></label>
                        <input type="text" class="form-control" id="validationDefault17" placeholder="Line ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 Place of Birth -->
                        <label for="validationDefault18"></label>
                        <input type="text" class="form-control" id="validationDefault18" placeholder="Place of Birth" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member1 DOB -->
                        <label for="validationDefault19"></label>
                        <input type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault19" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group input-group">
                        <!-- Member Test -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your test result</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader CV -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader Portofolio -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Upload your Portofolio (Optional)</label>
                        </div>
                    </div>

                    <h3>Member 2</h3>
                    <div class="box-input form-group">
                        <!-- Member2 Full Name -->
                        <label for="validationDefault20"></label>
                        <input type="text" class="form-control" id="validationDefault20" placeholder="Full Name" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Email -->
                        <label for="validationDefault21 inputEmail4"></label>
                        <input type="email" class="form-control" id="validationDefault21 InputEmail4" placeholder="Email" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Address -->
                        <label for="validationDefault22"></label>
                        <input type="text" class="form-control" id="validationDefault22" placeholder="Address" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Phone Number -->
                        <label for="validationDefault23"></label>
                        <input type="tel" class="form-control validationDefault24" placeholder="Phone Number" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Git ID -->
                        <label for="validationDefault25"></label>
                        <input type="text" class="form-control" id="validationDefault25" placeholder="Git ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Line ID -->
                        <label for="validationDefault26"></label>
                        <input type="text" class="form-control" id="validationDefault26" placeholder="Line ID" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 Place of Birth -->
                        <label for="validationDefault27"></label>
                        <input type="text" class="form-control" id="validationDefault27" placeholder="Place of Birth" required>
                    </div>
                    <div class="box-input form-group">
                        <!-- Member2 DOB -->
                        <label for="validationDefault28"></label>
                        <input type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault28" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader Test -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your test result</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader CV -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                          <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <!-- Leader Portofolio -->
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Upload your Portofolio (Optional)</label>
                        </div>
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