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
                    <a href="home"><img src="/style/assets/file-invoice-solid.svg" alt=""></a>
                </div>
                <div class="tol aktif">
                    <a href="payment"><img src="/style/assets/money-bill-wave-solid.svg" alt=""></a>
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
    </div>

    <div class="pay">
        <div class="pay-bodi">
            <div class="title-bodi">
                <h1>PARTICIPANT PAYMENT STATUS</h1>
            </div>
            <div class="content-bodi">
            <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Id</th>
							<th>Group Name</th>
                            <th>Payment Status</th>
							<th width="1%">Receipt</th>
                            <th width="1%">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($datausers as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
                            @if($user->payment != null)
                            <td>Paid</td>
                            <td><a href="{{route('payment.image', ['id' => $user->id, 'filename'=> $user->payment])}}" class="btn btn-info form-control"  target="_blank">View</a></td>
                            @else
                            <td>Unpaid</td>
                            <td>Unavailable</td>
                            @endif
                            <td>
                            <form action="{{route('user.delete', $user)}}" method="POST">
                             @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" >Delete</button>
                            </td>

                    </form>
						</tr>
						@endforeach
					</tbody>
				</table>
            </div>
        </div>
    </div>
</section>
</body>
</html>