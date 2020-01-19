<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timeline</title>
    <link rel="stylesheet" href="/style/styles/user-deskboard.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
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
			<div class="navs"><a href="home">Home</a></div>
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
  <section class="timeline-page" id="timeline">
      <h1>TIMELINE</h1>
      <div class="timeline">
          <div class="try-time-line try-time-right">
              <div class="timeline-icon">
                  <img src="/style/assets/timeline1.png" alt="">
              </div>
          
            <div class="timeline-text right-r">
                <div class="text">
                    <h2>2016 | Title 1</h2><hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odio corrupti hic nesciunt illum debitis quas ratione soluta assumenda repellendus, aliquam eligendi quis, perferendis laboriosam cumque natus cum veniam quod?</p>
                </div>   
            </div>
        </div>
        <div class="try-time-line try-time-left">
            <div class="timeline-text left-l">
                <div class="text">
                    <h2>2017 | Title 2</h2><hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odio corrupti hic nesciunt illum debitis quas ratione soluta assumenda repellendus, aliquam eligendi quis, perferendis laboriosam cumque natus cum veniam quod?</p>
                </div>
            </div>
            <div class="timeline-icon">
                <img src="/style/assets/timeline2.png" alt="">
            </div>
        </div>
        
        <div class="try-time-line try-time-right">
            <div class="timeline-icon">
                <img src="/style/assets/timeline3.png" alt="">
            </div>
        
            <div class="timeline-text right-r">
                <div class="text">
                    <h2>2018 | Title 3</h2><hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odio corrupti hic nesciunt illum debitis quas ratione soluta assumenda repellendus, aliquam eligendi quis, perferendis laboriosam cumque natus cum veniam quod?</p>
                </div>
            </div>
        </div>
        <div class="try-time-line try-time-left">
            <div class="timeline-text left-l">
                <div class="text">
                    <h2>2019 | Title 4</h2><hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odio corrupti hic nesciunt illum debitis quas ratione soluta assumenda repellendus, aliquam eligendi quis, perferendis laboriosam cumque natus cum veniam quod?</p>
                </div>
            </div>
            <div class="timeline-icon">
                <img src="/style/assets/timeline4.png" alt="">
            </div>
        </div>
        <div class="try-time-line try-time-right">
            <div class="timeline-icon">
                <img src="/style/assets/timeline5.png" alt="">
            </div>
            <div class="timeline-text right-r">
                <div class="text">
                    <h2>2020 | Title 5</h2><hr>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse odio corrupti hic nesciunt illum debitis quas ratione soluta assumenda repellendus, aliquam eligendi quis, perferendis laboriosam cumque natus cum veniam quod?</p>
                </div>
            </div>
        </div>
      </div>
</section>
<section class="rundown-page" id="rundown">
    <h1>RUNDOWN</h1>
    <div class="rundown">
        <h3>2016 | Title 1</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>07.00-09.00</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, obcaecati, odio neque laboriosam earum.</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10.00-12.00</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minima velit deleniti consequatur culpa</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13.00-15.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis excepturi iusto incidunt laboriosam at qua</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>16.00-18.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, enim, aliquam at consectetur ad ipsum, ratione voluptas</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="rundown">
        <h3>2017 | Title 2</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>07.00-09.00</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, obcaecati, odio neque laboriosam earum.</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10.00-12.00</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minima velit deleniti consequatur culpa</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13.00-15.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis excepturi iusto incidunt laboriosam at qua</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>16.00-18.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, enim, aliquam at consectetur ad ipsum, ratione voluptas</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="rundown">
        <h3>2018 | Title 3</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>07.00-09.00</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, obcaecati, odio neque laboriosam earum.</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10.00-12.00</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minima velit deleniti consequatur culpa</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13.00-15.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis excepturi iusto incidunt laboriosam at qua</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>16.00-18.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, enim, aliquam at consectetur ad ipsum, ratione voluptas</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="rundown">
        <h3>2019 | Title 4</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>07.00-09.00</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, obcaecati, odio neque laboriosam earum.</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10.00-12.00</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minima velit deleniti consequatur culpa</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13.00-15.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis excepturi iusto incidunt laboriosam at qua</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>16.00-18.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, enim, aliquam at consectetur ad ipsum, ratione voluptas</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="rundown">
        <h3>2020 | Title 5</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>07.00-09.00</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, obcaecati, odio neque laboriosam earum.</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10.00-12.00</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minima velit deleniti consequatur culpa</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13.00-15.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quis excepturi iusto incidunt laboriosam at qua</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>16.00-18.00</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, enim, aliquam at consectetur ad ipsum, ratione voluptas</td>
              </tr>
            </tbody>
          </table>
    </div>
</section>
</section>
    <script src="/style/jquery.js"></script>
    <script src="/style/Bootstrap/js/bootstrap.min.js"></script>
    <script src="/style/user.js"></script>
</body>
</html>