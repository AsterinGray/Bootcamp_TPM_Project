<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>User Dashboard</title> -->
    <link rel="stylesheet" href="/style/styles/user-deskboard.css">
    <link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
<section class="Dashboard">
	<section class="UserNav">
	<div class="ham-bar" id="hamburger-bar">
		<img src="/style/assets/Bootcamp.png" alt="">
		<div class="ham">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
		</div>
	</div>
	<div class="navsbar" id="navbar">
		<div class="gambar">
			<img src="/style/assets/Bootcamp.png" alt="" class="logo" id="logo">
		</div>
		<div class="navs-link">
			<div class="navs"><a href="{{route('home')}}">Home</a></div>
			<div class="navs"><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
                </form>
                    
         </div>
		</div>
	</div>
</section>
<section class="Dashboard" id="Dashboard">
    <h1>Group Info</h1>
  <div class="team-name">
      <label><h3>Team Name</h3></label>
      <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->name }}</a>
  </div>
  
 
  <div class="card">
      <p>Leader</p>
      <div class="card-body">
        <div class="form-left">
          <form>
            <div class="form-group">
                <label>Name</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->name0 }}</a>
            </div>
            <div class="form-group">
                <label>Address</label>
                <a type="text" class="form-control" placeholder="Address" readonly>{{ $user->address }}</a>
            </div>
            <div class="form-group">
                <label>Email</label>
                <a type="text" class="form-control" placeholder="Email" readonly>{{ $user->email0 }}</a>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->git }}</a>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Phone Number</label>
                <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ $user->phone }}</a>
            </div>
            <div class="form-group">
                <label>Line ID</label>
                <a type="text" class="form-control" placeholder="Line ID" readonly>{{ $user->line }}</a>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ $user->dob }}</a>
            </div>
          </form>
        </div>
      </div>
  </div>

  <div class="card">
      <p>Member 1</p>
      <div class="card-body">
        <div class="form-left">
          <form>
            <div class="form-group">
                <label>Name</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->name1 }}</a>
            </div>
            <div class="form-group">
                <label>Address</label>
                <a type="text" class="form-control" placeholder="Address" readonly>{{ $user->address1 }}</a>
            </div>
            <div class="form-group">
                <label>Email</label>
                <a type="text" class="form-control" placeholder="Email" readonly>{{ $user->email1 }}</a>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->git1 }}</a>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Phone Number</label>
                <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ $user->phone1 }}</a>
            </div>
            <div class="form-group">
                <label>Line ID</label>
                <a type="text" class="form-control" placeholder="Line ID" readonly>{{ $user->line1 }}</a>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ $user->dob1 }}</a>
            </div>
          </form>
        </div>
      </div>
  </div>

  <div class="card">
    <p>Member 2</p>
    <div class="card-body">
      <div class="form-left">
        <form>
          <div class="form-group">
              <label>Name</label>
              <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->name2 }}</a>
          </div>
          <div class="form-group">
              <label>Address</label>
              <a type="text" class="form-control" placeholder="Address" readonly>{{ $user->address2 }}</a>
          </div>
          <div class="form-group">
              <label>Email</label>
              <a type="text" class="form-control" placeholder="Email" readonly>{{ $user->email2 }}</a>
          </div>
          <div class="form-group">
              <label>Git ID</label>
              <a type="text" class="form-control" placeholder="Name" readonly>{{ $user->git2 }}</a>
          </div>
        </form>
      </div>
      <div class="form-right">
        <form>
          <div class="form-group">
              <label>Phone Number</label>
              <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ $user->phone2 }}</a>
          </div>
          <div class="form-group">
              <label>Line ID</label>
              <a type="text" class="form-control" placeholder="Line ID" readonly>{{ $user->line2 }}</a>
          </div>
          <div class="form-group">
              <label>Date of Birth</label>
              <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ $user->dob2 }}</a>
          </div>
        </form>

      </div>
    </div>
  </div> 

</section>
    <script src="/style/jquery.js"></script>
    <script src="/style/Bootstrap/js/bootstrap.min.js"></script>
    <script src="/style/user.js"></script>
</body>
</html>