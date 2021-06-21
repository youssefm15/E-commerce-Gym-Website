
<?php
session_start();
include "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gym Projects</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/media-queries.css" rel="stylesheet">
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://use.fontawesome.com/0e46e58ec0.js"></script>


</head>

<body data-spy="scroll" data-target="#navbarResponsive">


<div id="home">

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">

			<span class="navbar-toggler-icon"></span>

		</button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
 <ul class="navbar-nav ml-auto">
	 <li class="nav-item">
		<?php 
    
             if (!isset($_SESSION['id']))
                 echo " <a 
		  class='nav-link' href='./login.php'> login   </a>"; 
         else {
                    $username = $_SESSION['username'];
                 echo "<a 
		  class='nav-link' href='./profil.php'> Welcome $username  </a> ";
             }
                    
             ?>
           
	 </li>
	 <li class="nav-item">
			<a class="nav-link" href="#classes">classes</a>
		</li>
		
			<li class="nav-item">
					<a class="nav-link" href="#streng">Resources</a>
				</li>
				<li class="nav-item">
						<a class="nav-link" href="cart.php">Store</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="./contact.php">Contact</a>
						</li>
 </ul>
   </div>
	</nav>

<div class="landing">
<div class="home-wrap">
	<div class="home-inner">

	</div>
</div>

</div>


<div class="caption text-center">
	<h1> Welcome to BEAST MODE </h1>
	<h3> Achieve your dream body</h3>
	<a class="btn btn-outline-light btn-lg" href="login.php">Get Started</a>

</div>



</div>

<section id="closer">
<div class="closer">

	<div class="col-12 narrow closing-claim">

		<h1 style="color:white;">We launch leaders with big ideas</h1>

		<p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <br>
		<div class="container">
	  <div class="row">
	    <div class="col text-center">
	      <a class="btn btn-outline-light btn-lg" href="login.php">Enroll now!</a>
	    </div>
	  </div>
	</div>

	</div>
</section>



<section id="classes" class="text-center classes">
		<h2 class="section-title text-uppercase font-weight-bolder font-italic pb-5 display-3" style="color:white;">
				the classes
		</h2>
		<div class="container">
				<div class="row">
						<div class="col-md-6 mb-5">
								<div class="class-item bg-white d-lg-flex d-block text-center text-lg-left">
										<div class="thumb">
											<img src="img/trainer/trainer4.jpg" alt="" srcset="" class="trainer">
										</div>
										<div class="class-info p-5">
												<h3 class="font-weight-bold font-italic">YOGA</h3>
												<p class="text-muted font-weight-bolder">Maximum: 10 persons</p>
												<h4 class="color-success font-italic pb-5">$500/year</h4>
												<a href="#" class="btn btn-outline-success">JOIN NOW</a>
										</div>
								</div>
						</div>
						<div class="col-md-6 mb-5">
								<div class="class-item bg-white d-lg-flex d-block text-center text-lg-left">
										<div class="thumb">
												<img src="img/trainer/trainer1.jpg" alt="" srcset="" class="trainer">
										</div>
										<div class="class-info p-5">
												<h3 class="font-weight-bold font-italic">AEROBIC</h3>
												<p class="text-muted font-weight-bolder">Maximum: 10 persons</p>
												<h4 class="color-success font-italic pb-5">$500/year</h4>
												<a href="#" class="btn btn-outline-success">JOIN NOW</a>
										</div>
								</div>
						</div>
						<div class="col-md-6 mb-5">
								<div class="class-item bg-white d-lg-flex d-block text-center text-lg-left">
										<div class="thumb">
											<img src="img/trainer/trainer2.jpg" alt="" srcset="" class="trainer">
										</div>
										<div class="class-info p-5">
												<h3 class="font-weight-bold font-italic">ZUMBA</h3>
												<p class="text-muted font-weight-bolder">Maximum: 10 persons</p>
												<h4 class="color-success font-italic pb-5">$500/year</h4>
												<a href="#" class="btn btn-outline-success">JOIN NOW</a>
										</div>
								</div>
						</div>
						<div class="col-md-6 mb-5">
								<div class="class-item bg-white d-lg-flex d-block text-center text-lg-left">
										<div class="thumb">
											<img src="img/trainer/trainer3.jpg" alt="" srcset="" class="trainer4">
										</div>
										<div class="class-info p-5">
												<h3 class="font-weight-bold font-italic">DANCE SPORT</h3>
												<p class="text-muted font-weight-bolder">Maximum: 10 persons</p>
												<h4 class="color-success font-italic pb-5">$500/year</h4>
												<a href="#" class="btn btn-outline-success">JOIN NOW</a>
										</div>
								</div>
						</div>

				</div>
		</div>
</section>

<section id="streng">
		<div class="container">
				<div class="row streng-con">
						<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="streng-1">
										<div class="streng-text">
												<p class="text-1">Perfomance Gym</p>
												<p class="text-2">Nteger ac metus mi. Etiam eget arcu quis ligula ullamcorper hendrerit nec at neque. Vestibulum sed mauris tincidunt, tristique tellus sed, fermentum sapien. Phasellus pretium vestibulum est in porta. </p>
										</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="streng-2">
										<div class="streng-text">
												<p class="text-1">Strength & Conditioning</p>
												<p class="text-2">Nteger ac metus mi. Etiam eget arcu quis ligula ullamcorper hendrerit nec at neque. Vestibulum sed mauris tincidunt, tristique tellus sed, fermentum sapien. Phasellus pretium vestibulum est in porta. </p>
										</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="streng-3">
										<div class="streng-text">
												<p class="text-1">Swimming Pool</p>
												<p class="text-2">Nteger ac metus mi. Etiam eget arcu quis ligula ullamcorper hendrerit nec at neque. Vestibulum sed mauris tincidunt, tristique tellus sed, fermentum sapien. Phasellus pretium vestibulum est in porta. </p>
										</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="streng-4">
										<div class="streng-text">
												<p class="text-1">Sport Classes</p>
												<p class="text-2">Nteger ac metus mi. Etiam eget arcu quis ligula ullamcorper hendrerit nec at neque. Vestibulum sed mauris tincidunt, tristique tellus sed, fermentum sapien. Phasellus pretium vestibulum est in porta. </p>
										</div>
								</div>
						</div>
				</div>
		</div>





</section>
<section id="trainers">
		<div class="container">
				<div class="title">Train AlongSide The Best</div>
				<div class="row-t">
						<div class="trainers-col">
								<div class="trainers-img">
										<img src="img/trainer/trainer1.jpg" alt="trn1" >
								</div>
								<div class="trainers-down">
										<p class="trainers-text">
												Ann Baker<br>
												Personal Trainer
										</p>
										<p class="trainers-text-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.
										</p>

								</div>
						</div>
						<div class="trainers-col">
								<div class="trainers-img">
										<img src="img/trainer/trainer2.jpg" alt="trn2" >
								</div>
								<div class="trainers-down">
										<p class="trainers-text">
												Peter Rice<br>
												Personal Trainer
										</p>
										<p class="trainers-text-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.
										</p>

								</div>
						</div>
						<div class="trainers-col">
								<div class="trainers-img">
										<img src="img/trainer/trainer3.jpg" alt="trn3" >
								</div>
								<div class="trainers-down">
										<p class="trainers-text">
												Anne Warren<br>
												Personal Trainer
										</p>
										<p class="trainers-text-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.
										</p>

								</div>
						</div>
						<div class="trainers-col">
								<div class="trainers-img">
										<img src="img/trainer/trainer4.jpg" alt="trn4" >
								</div>
								<div class="trainers-down">
										<p class="trainers-text">
												Alex Silva<br>
												Personal Trainer
										</p>
										<p class="trainers-text-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.
										</p>

								</div>
						</div>
				</div>
		</div>
</section>
<section id="contact">

	<div class="container">
			<div class="row row-j">
					<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
							<div class="contact-text">
									<p class="contact-text-1">Ready to make a life change? We’re thrilled to help you along your path to a fit and healthy life. Our experts take great pride in helping achieve your goals.</p>
							</div>
					</div>
					<div class="col-md-6 col-md-offset-3 col-sm-12 text-center">
							<div class="contact-form">
									<input type="text" placeholder="NAME">
									<input type="email" placeholder="EMAIL">
									<select name="select">
											<option value="Select Membership Package">Select Membership Package</option>
											<option value="Standard">Standard</option>
											<option value="Professional">Proffesional</option>
											<option value="Elite">Elite</option>
									</select>
									<button type="button" class="join-button">Join Now</button>
							</div>
					</div>
			</div>
	</div>



</section>


<section id="ftr">
		<div class="container">
				<div class="row row-f">
						<div class="col-md-3 col-sm-6 col-xs-12 col-f">
								<p class="ftr-title">Come Find us</p>
								<div class="ftr-text">
										<p>12345 North Main Street</p>
										<p>New York, NY 555555</p>
										<p>Phone: 1.800.555.6789</p>
								</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 col-f">
								<p class="ftr-title">Recent Posts</p>
								<div class="ftr-text">
										<p class="ftr-bott">Train with free weights or your body weight?</p>
										<p class="ftr-bott">Nutritional advice that will keep you training</p>
								</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 col-f">
								<p class="ftr-title">Openings Times</p>
								<div class="ftr-text">
										<p>Weekdays Monday - Friday</p>
										<p class="ftr-hours">09:00 - 19:00</p>
										<p>Weekends Saturday - Sunday</p>
										<p class="ftr-hours">09:00 - 21:00</p>
								</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 col-f">
								<div class="ftr-img">
										<img src="img/result/ftr.jpg" alt="ftr" >
								</div>
						</div>
				</div>
		</div>
</section>


<footer>
		<div class="container">
				<div class="row row-footer">
						<div class="col-md-10 col-sm-6 col-xs-12">
								<p> © Copyright 2020  | by Meteora  |   All Rights Reserved   |</p>
						</div>
						 <div class="col-md-2 col-sm-6 col-xs-12">
								<div class="foot-social">
									<i class="fab fa-facebook-square fa-3x"></i>

<i class="fab fa-twitter-square fa-3x"></i>
<i class="fab fa-instagram fa-3x"></i>
										<div class="up up-opa"></div>
								</div>
						</div>
				</div>
		</div>
</footer>




</body>
</html>
