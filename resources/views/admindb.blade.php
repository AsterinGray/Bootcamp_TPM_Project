<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/styles/AdminDashboard.css">
</head>
<body>
<section class="bodi">
    <div class="navi">
        <div class="container">
            <div class="header">
                <img src="/style/assets/Bootcamp.png" alt="">
                <h1>Admin</h1>
            </div>
            <div class="tool">
                <div class="tol">
                    <a href=""><img src="/style/assets/money-bill-wave-solid.svg" alt=""></a>
                </div>
                <div class="tol">
                    <a href=""><img src="/style/assets/file-invoice-solid.svg" alt=""></a>
                </div>
                <div class="tol">
                  <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><img src="/style/assets/sign-out-alt-solid.svg" alt=""></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
                </form>  
                </div>
            </div>
        </div>
    </div>

    <div class="pay">
        <div class="pay-bodi">
            <div class="title-bodi">
                <h1>DATA PARTICIPANT</h1>
            </div>
            @foreach($datausers as $user)
            <div class="content-bodi">
                <div class="tim">
                    <h2>{{$user->name}}</h2>
                    <br>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <br>
                    <button type="button" class="btn btn-danger">Delete</button>
                    <hr>
                </div>
                <div class="data">

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</body>
</html>