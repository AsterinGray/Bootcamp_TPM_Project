<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
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
			<div class="navs"><a href="{{url('timeline')}}">Timeline</a></div>
			<div class="navs"><a href="{{url('timeline')}}">Rundown</a></div>
			<div class="navs"><a href="{{url('index')}}">Logout</a></div>
		</div>
	</div>
</section>
<section class="Dashboard" id="Dashboard">
    <h1>User Dashboard</h1>
  <div class="team-name">
      <label><h3>Team Name</h3></label>
      <input type="text" class="form-control" placeholder="Name" readonly>
  </div>

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
                <input type="text" class="form-control" placeholder="Name" readonly>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" readonly>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <input type="text" class="form-control" placeholder="Name" readonly>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Phone Number" readonly>
            </div>
            <div class="form-group">
                <label>Line ID</label>
                <input type="text" class="form-control" placeholder="Line ID" readonly>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" class="form-control" placeholder="Date of Birth" readonly>
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
                <input type="text" class="form-control" placeholder="Name" readonly>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" readonly>
            </div>
            <div class="form-group">
                <label>Git ID</label>
                <input type="text" class="form-control" placeholder="Name" readonly>
            </div>
          </form>
        </div>
        <div class="form-right">
          <form>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Phone Number" readonly>
            </div>
            <div class="form-group">
                <label>Line ID</label>
                <input type="text" class="form-control" placeholder="Line ID" readonly>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" class="form-control" placeholder="Date of Birth" readonly>
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
              <input type="text" class="form-control" placeholder="Name" readonly>
          </div>
          <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" placeholder="Address" readonly>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" readonly>
          </div>
          <div class="form-group">
              <label>Git ID</label>
              <input type="text" class="form-control" placeholder="Name" readonly>
          </div>
        </form>
      </div>
      <div class="form-right">
        <form>
          <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="Phone Number" readonly>
          </div>
          <div class="form-group">
              <label>Line ID</label>
              <input type="text" class="form-control" placeholder="Line ID" readonly>
          </div>
          <div class="form-group">
              <label>Date of Birth</label>
              <input type="text" class="form-control" placeholder="Date of Birth" readonly>
          </div>
        </form>
      </div>
    </div>
  </div> 
</section>
    <script src="jquery.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="user.js"></script>
</body>
</html>