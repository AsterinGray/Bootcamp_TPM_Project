<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Team Information</title>

    <link rel="stylesheet" href="/style/styles/Login-Regis.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <div class="area">
        <div class="Login-Regis" id="Regis">
            <div class="form" id="Regis">
                <h1>Registration</h1>
                <!-- <img src="assets/SignUp.png" alt="">  -->
                <form class="need-validation" method="POST" action="{{ url('group/'.$user->id) }}">
                    @csrf
                    {{method_field('PUT')}}
                    <h3>Team</h3>
                    <div class="form-col">
                        <div class="form-left">
                            <div class=" form-group">
                                <!-- Username -->
                                <label for="validationDefault01">Username</label>
                                <input name="name" type="text" value="{{ $user->name }}">
                                <!-- <input id="name validationDefault01" placeholder="Group Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="  form-group">
                                <!-- Email -->
                                <label for="validationDefault02 inputEmail1">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}">
                                <!-- <input id="email validationDefault02 InputEmail1" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> -->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="sec">
                        <h3>Leader</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Leader Full Name -->
                                    <label for="validationDefault05">Full Name</label>
                                    <input name="name0" type="text" value="{{ $user->name0 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Email -->
                                    <label for="validationDefault06 inputEmail2">Email</label>
                                    <input name="email0" type="email" value="{{ $user->email0 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Address -->
                                    <label for="validationDefault07">Address</label>
                                    <input name="address" type="text" value="{{ $user->address }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Phone Number -->
                                    <label for="validationDefault08">Phone Number</label>
                                    <input name="phone" type="tel" value="{{ $user->phone }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Git ID -->
                                    <label for="validationDefault09">Git ID</label>
                                    <input name="git" type="text" value="{{ $user->git }}">
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Leader Line ID -->
                                    <label for="validationDefault10">Line ID</label>
                                    <input name="line" type="text" value="{{ $user->line }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Leader DOB -->
                                    <label for="validationDefault11">Date of Birth</label>
                                    <input name="dob" type="text" value="{{ $user->dob }}">
                                </div>
                                <!-- <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="score" type="file" value="{{ $user-> }}">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="ktp" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="cv" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="sec">
                        <h3>Member 1</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Member1 Full Name -->
                                    <label for="validationDefault12">Full Name</label>
                                    <input name="name1" type="text" value="{{ $user->name1 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Email -->
                                    <label for="validationDefault13 inputEmail3">Email</label>
                                    <input name="email1" type="email" value="{{ $user->email1 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Address -->
                                    <label for="validationDefault14">Address</label>
                                    <input name="address1" type="text" value="{{ $user->address1 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Phone Number -->
                                    <label for="validationDefault15">Phone Number</label>
                                    <input name="phone1" type="tel" value="{{ $user->phone1 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Git ID -->
                                    <label for="validationDefault16">Git ID</label>
                                    <input name="git1" type="text" value="{{ $user->git1 }}">
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Member1 Line ID -->
                                    <label for="validationDefault17">Line ID</label>
                                    <input name="line1" type="text" value="{{ $user->line1 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 DOB -->
                                    <label for="validationDefault19">Date of Birth</label>
                                    <input name="dob1" type="text" value="{{ $user->dob1 }}">
                                </div>
                                <!-- <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="score1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="ktp1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="cv1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="sec">
                        <h3>Member 2</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Member2 Full Name -->
                                    <label for="validationDefault20">Full Name</label>
                                    <input name="name2" type="text" value="{{ $user->name2 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Email -->
                                    <label for="validationDefault21 inputEmail4">Email</label>
                                    <input name="email2" type="email" value="{{ $user->email2 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Address -->
                                    <label for="validationDefault22">Address</label>
                                    <input name="address2" type="text" value="{{ $user->address2 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Phone Number -->
                                    <label for="validationDefault23">Phone Number</label>
                                    <input name="phone2" type="tel" value="{{ $user->phone }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Git ID -->
                                    <label for="validationDefault25">Git ID</label>
                                    <input name="git2" type="text" value="{{ $user->git2 }}">
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Member2 Line ID -->
                                    <label for="validationDefault26">Line ID</label>
                                    <input name="line2" type="text" value="{{ $user->line2 }}">
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 DOB -->
                                    <label for="validationDefault28">Date of Birth</label>
                                    <input name="dob2" type="text" value="{{ $user->dob2 }}">
                                </div>
                                <!-- <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="score2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="ktp2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    Leader Test
                                    <div class="custom-file">
                                    <input name="cv2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="sub">
                        <!-- <div class="extra" id="Regis">
                            <img src="/style/assets/SignUp.png" alt="">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery.js"></script>
</body>
</html>