<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Bootcamp</title>
  
	<link rel="stylesheet" href="/style/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="/style/styles/style.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">

	</head>
<body>
<div class="loader">
	<img src="/style/assets/Bootcamp.png" alt="">
	<h1>A MOUNTAIN OF EXPERIENCES AWAITS YOU</h1>
</div>
<section class="header" id="Landing">
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
			<img src="/style/assets/Bootcamp.png" alt="Logo" class="logo" id="logo">
		</div>
		<div class="navs-link">
			<div class="navs"><a href="#Landing">Home</a></div>
			<div class="navs"><a href="#About">About</a></div>
			<div class="navs"><a href="#Sponsor">Sponsor</a></div>
			<div class="navs"><a href="#FAQs">FAQ</a></div>
			<div class="navs"><a href="#Contact-us">Contact Us</a></div>
			<div class="navs"><a href="{{url('login')}}">Login</a></div>
			<div class="navs" id="Regis"><a href="{{url('regis')}}">Sign Up</a></div>
		</div>
	</div>
	<div class="container">
		<div class="title">
			<h1>A MOUNTAIN OF EXPERIENCES AWAITS YOU</h1>
			<div class="title-contain">
				<img src="/style/assets/map-marker-alt-solid.svg" alt="">
				<h3>Sekre</h3>
			</div>
			<div class="title-contain">
				<img src="/style/assets/calendar-alt-regular.svg" alt="">
				<h3>11 - 13 July 2020</h3>
			</div>
		</div>
		<img src="/style/assets/Learning_illustration.png" alt="">
	</div>
</section>


<section class="landing" id="About">
	<img src="/style/assets/About_illustration1.png" alt="">
		<div class="text">
			<div class="titles">
				<h1>What is Bootcamp?</h1>
				<div class="kotak"></div>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In laboriosam dolores distinctio sunt porro unde error, veritatis, autem, quibusdam excepturi aperiam ea eius ipsa. Ex tempore numquam, error laborum molestiae?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae nulla voluptatum</p>
			<p>perspiciatis fugiat sequi ratione cupiditate, perferendis nostrum ipsam, saepe reprehenderit tenetur recusandae libero omnis iusto ipsa ducimus, quibusdam blanditiis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa voluptatem, maxime</p> 
		</div>
</section>
<section class="why">
	<div class="text">
		<div class="titles">
			<h1>Why You Should Join Us ?</h1>
			<div class="kotak"></div>
		</div>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit suscipit animi illo, facere modi eos quo repellendus veritatis labore distinctio fuga eveniet, vero voluptate, ullam reiciendis maxime itaque deleniti hic? Delectus voluptas, reprehenderit quaerat qui aut atque odit inventore cum!</p>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum sunt iure inventore quo facilis nemo voluptates. Ratione, ullam quidem, perferendis reiciendis dolorum consectetur ipsa provident, dolor numquam totam nihil officiis!</p> 
	</div>
	<div id="carouselExampleIndicators" class="carousel slide caro" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			  <div class="caro-in">
				<h3>UI/UX</h3>
				<img class="d-block w-100" src="/style/assets/Carousel1.png" alt="First slide">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quibusdam.</p>
			  </div>
		  </div>
		  <div class="carousel-item">
			<div class="caro-in">
				<h3>Information Technology</h3>
				<img class="d-block w-100" src="/style/assets/Carousel2.png" alt="First slide">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quibusdam.</p>
			  </div>
		  </div>
		  <div class="carousel-item">
			<div class="caro-in">
				<h3>Bussiness</h3>
				<img class="d-block w-100" src="/style/assets/Carousel3.png" alt="First slide">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quibusdam.</p>
			  </div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
		  <img src="/style/assets/arrow-circle-left-solid.svg" alt="">
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
		  <img src="/style/assets/arrow-circle-right-solid.svg" alt=""> 
		  <span class="sr-only">Next</span>
		</a>
	</div>
</section>
<div class="seg">
	<img src="/style/assets/seg.png" alt="">
</div>
<section class="sponsor" id="Sponsor">
	<span><h2>Platinum Sponsor</h2></span>
	<div class="platinum">
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
	</div>
	<span><h2>Gold Sponsor</h2></span>
	<div class="gold">
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
	</div>
	<span><h2>Silver Sponsor</h2></span>
	<div class="silver">
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
	</div>
	<span><h2>Media Partner</h2></span>
	<div class="Media">
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
		<a href=""><img src="/style/assets/Carousel1.png" alt=""></a>
	</div>
</section>
<div class="seg">
	<img src="/style/assets/seg.png" alt="" style="transform: rotate(180deg);">
</div>
<section class="FAQs" id="FAQs">
  	<div class="faq-page">
		<h1>FAQ</h1>
		<div class="faq-content">
			<img src="/style/assets/Question.png" alt="">
			<div class="faq">
				<div class="faq-left">
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
				</div>
				<div class="faq-right">
					<button class="faq-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
					<button class="faq-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</button>
					<div class="faq-text">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis minus provident, aliquam repellat dolores iste quaerat? Aut repudiandae error voluptate consequatur itaque minus, voluptates sapiente dolor quibusdam aliquid adipisci?</p>
					</div><br>
				</div>
			</div>
			<img src="/style/assets/Answer.png" alt="">
		</div>
	</div>
</section>
<section class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4551138405604!2d106.78301300510563!3d-6.203538001246933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c4a8e09f5d%3A0x29720d62d8b976c5!2sBina%20Nusantara%20Computer%20Club!5e0!3m2!1sen!2sid!4v1577065123992!5m2!1sen!2sid" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<section class="Contact" id="Contact-us">
	<h1>Contact Us</h1>
	<div class="contact-page">
        <div class="contact-left">
            <div class="social-media">
				<div>
					<img src="/style/assets/Contact-us.png" alt="" width="250vw" height="250vh">
				</div>
                <div class="sosmed-content">
					<div>
						<a href="#" class="sosmed">
							<i class="far fa-envelope">
								<span>boot@camp.com</span>
							</i>
						</a>
						<a href="#" class="sosmed">
							<i class="fab fa-instagram">
								<span>@bootcamp</span>
							</i>
						</a>
					</div>
					<div>
						<a href="#" class="sosmed">
							<i class="fab fa-facebook">
								<span>@bootcamp</span>
							</i>
						</a>
						<a href="#" class="sosmed">
							<i class="fab fa-twitter">
								<span>@bootcamp</span>
							</i>
						</a>
					</div>
				</div>
            </div>
        </div>
        <div class="contact-right">
            <div class="form-message">
            	<h1>Send Us a Message</h1>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                    </div>    
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>

					</div>
					<div class="form_submit">
						<button type="submit" class="btn btn-primary">Submit</button> 
					</div>
                </form>
            </div>
        </div>
	</div>
</section>
<section class="foot">
	<div class="foot-img">
		<div class="foot-left">
			<span><b>Powered by :</b></span>
			<img src="/style/assets/Bootcamp.png" alt="">
		</div>
		<div class="foot-right">
			<span><b>Organized by :</b></span>
			<img src="/style/assets/Bootcamp.png" alt="">
		</div>
	</div>
	<div class="foot-bottom">
		<h6>&copy; 2019 Copyright Bootcamp</h6>
	</div>
</section>

<script src="/style/jquery.js"></script>
<script src="/style/Bootstrap/js/bootstrap.min.js"></script>
<script src="/style/script.js"></script>

</body>
</html>
