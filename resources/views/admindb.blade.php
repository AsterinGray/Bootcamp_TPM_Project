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
                    <hr>
                    <br>
                    <!-- <form action="{{url('/view')}}">
                    <button type="submit" class="btn btn-info" >View</button>
                    </form> -->
                    <h4>Leader</h4>
                    <p>Full Name: {{$user->name0}}</p>
                    <p>Email: {{$user->email0}}</p>
                    <p>Address: {{$user->address}}</p>
                    <p>Phone Number: {{$user->phone}}</p>
                    <p>Git ID: {{$user->git}}</p>
                    <p>Line ID: {{$user->line}}</p>
                    <p>Date of Birth: {{$user->dob}}</p>
                    <!-- <p>Leader Score:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Leader ID Card:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Leader CV:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p> -->
                    <br>
                    <br>
                    <h4>Member 1</h4>
                    <p>Full Name: {{$user->name1}}</p>
                    <p>Email: {{$user->email1}}</p>
                    <p>Address: {{$user->address1}}</p>
                    <p>Phone Number: {{$user->phone1}}</p>
                    <p>Git ID: {{$user->git1}}</p>
                    <p>Line ID: {{$user->line1}}</p>
                    <p>Date of Birth: {{$user->dob1}}</p>
                    <!-- <p>Member 1 Score:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Member 1 ID Card:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Member 1 CV:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p> -->
                    <br>
                    <h4>Member 2</h4>
                    <p>Full Name: {{$user->name2}}</p>
                    <p>Email: {{$user->email2}}</p>
                    <p>Address: {{$user->address2}}</p>
                    <p>Phone Number: {{$user->phone2}}</p>
                    <p>Git ID: {{$user->git2}}</p>
                    <p>Line ID: {{$user->line2}}</p>
                    <p>Date of Birth: {{$user->dob2}}</p>
                    <!-- <p>Member 2 Score:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Member 2 ID Card:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p>
                    <p>Member 2 CV:
                    <button type="submit" class="btn btn-info" >View</button>
                    </p> -->
                    <br>
                
                    <form action="{{route('user.delete', $user)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" >Delete</button>
                    
                    </form>
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