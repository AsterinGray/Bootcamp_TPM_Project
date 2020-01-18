<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Auth::user()->name }} Dashboard</title>
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
			<div class="navs"><a href="#Dashboard">Home</a></div>
			<div class="navs"><a href="timeline#timeline">Timeline</a></div>
			<div class="navs"><a href="timeline#rundown">Rundown</a></div>
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
    <h1>User Dashboard</h1>
  <div class="team-name">
      <label><h3>Team Name</h3></label>
      <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->name }}</a>
  </div>
<br>
<br>
  <div class="payment">
    <h2>Payment Status: Paid / No Paid</h2>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
      <label class="custom-file-label" for="inputGroupFile01">Upload your Payment</label>
    </div>
  </div>
  
 
  <div class="card">
      <p>Leader</p>
      <div class="card-body">
        <div class="form-left">
          <form>
            <div class="form-group">
                <label>Name</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->name0 }}</a>
            </div>
            <div class="form-group">
                <label>Address</label>
                <a type="text" class="form-control" placeholder="Address" readonly>{{ Auth::user()->address }}</a>
            </div>
            <div class="form-group">
                <label>Email</label>
                <a type="text" class="form-control" placeholder="Email" readonly>{{ Auth::user()->email0 }}</a>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->git }}</a>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ Auth::user()->phone }}</a>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Line ID</label>
                <a type="text" class="form-control" placeholder="Line ID" readonly>{{ Auth::user()->line }}</a>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ Auth::user()->dob }}</a>
                <div class="form-group">
                <label>Test Score</label>
                <a href="{{route('score', ['id' => Auth::user()->id, 'filename'=> Auth::user()->score])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>KTP</label>
                <a href="{{route('ktp', ['id' => Auth::user()->id, 'filename'=> Auth::user()->ktp])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>CV</label>
                <a href="{{route('cv', ['id' => Auth::user()->id, 'filename'=> Auth::user()->cv])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
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
                <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->name1 }}</a>
            </div>
            <div class="form-group">
                <label>Address</label>
                <a type="text" class="form-control" placeholder="Address" readonly>{{ Auth::user()->address1 }}</a>
            </div>
            <div class="form-group">
                <label>Email</label>
                <a type="text" class="form-control" placeholder="Email" readonly>{{ Auth::user()->email1 }}</a>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->git1 }}</a>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ Auth::user()->phone1 }}</a>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Line ID</label>
                <a type="text" class="form-control" placeholder="Line ID" readonly>{{ Auth::user()->line1 }}</a>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ Auth::user()->dob1 }}</a>
            </div>
            <div class="form-group">
                <label>Test Score</label>
                <a href="{{route('score', ['id' => Auth::user()->id, 'filename'=> Auth::user()->score1])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>KTP</label>
                <a href="{{route('ktp', ['id' => Auth::user()->id, 'filename'=> Auth::user()->ktp1])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>CV</label>
                <a href="{{route('cv', ['id' => Auth::user()->id, 'filename'=> Auth::user()->cv1])}}" class="btn btn-info form-control"  target="_blank">View</a>
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
              <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->name2 }}</a>
          </div>
          <div class="form-group">
              <label>Address</label>
              <a type="text" class="form-control" placeholder="Address" readonly>{{ Auth::user()->address2 }}</a>
          </div>
          <div class="form-group">
              <label>Email</label>
              <a type="text" class="form-control" placeholder="Email" readonly>{{ Auth::user()->email2 }}</a>
          </div>
          <div class="form-group">
              <label>Git ID</label>
              <a type="text" class="form-control" placeholder="Name" readonly>{{ Auth::user()->git2 }}</a>
          </div>
          <div class="form-group">
              <label>Phone Number</label>
              <a type="text" class="form-control" placeholder="Phone Number" readonly>{{ Auth::user()->phone2 }}</a>
          </div>
        </form>
      </div>
      <div class="form-right">
        <form>
          <div class="form-group">
              <label>Line ID</label>
              <a type="text" class="form-control" placeholder="Line ID" readonly>{{ Auth::user()->line2 }}</a>
          </div>
          <div class="form-group">
              <label>Date of Birth</label>
              <a type="text" class="form-control" placeholder="Date of Birth" readonly>{{ Auth::user()->dob2 }}</a>
          </div>
          <div class="form-group">
                <label>Test Score</label>
                <a href="{{route('score', ['id' => Auth::user()->id, 'filename'=> Auth::user()->score1])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>KTP</label>
                <a href="{{route('ktp', ['id' => Auth::user()->id, 'filename'=> Auth::user()->ktp1])}}" class="btn btn-info form-control"  target="_blank">View</a>
            </div>
            <div class="form-group">
                <label>CV</label>
                <a href="{{route('cv', ['id' => Auth::user()->id, 'filename'=> Auth::user()->cv1])}}" class="btn btn-info form-control"  target="_blank">View</a>
        </form>

      </div>
    </div>
  </div> 
</section>
<div  class="btnz card-body">
        <form action="{{url('/edit')}}">
                  <button type="submit" class="btn btn-warning" >Edit</button>
        </form>
</div>
    <script src="/style/jquery.js"></script>
    <script src="/style/Bootstrap/js/bootstrap.min.js"></script>
    <script src="/style/user.js"></script>
</body>
</html>