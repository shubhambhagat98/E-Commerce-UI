<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top-nav-bar">
		<div class="search-box">
			
			<a href="index.php"><img src="images/logo.png" class="logo"></a>
			<input type="text" class="form-control">
			<span class="input-group-text"><i class="fa fa-search" ></i></span>

		</div>
		<div class="menu-bar">
			<ul>
				<li><a href="#"><i class="fa fa-shopping-basket" ></i>cart</a></li>
				<?php
				 	if (isset($_SESSION['u_first'])) {
				 		echo '<li><a href="#">Hello, '. $_SESSION["u_first"].'</a></li>';
				 		echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
				 	}else {
				 		echo '<li><a href="signup.php">Sign Up</a></li>
							  <li><a href="login.php">Login</a></li>';
				 	}


				?>


				
			</ul>
		</div>
	</div>

	<section class="header">
	
		<div id="navbar" >
			<nav class="navbar my-nav navbar-expand-lg  bg-dark" >
			    <div class="mx-auto d-lg-flex d-block flex-lg-nowrap" >
			         <a class="navbar-brand" href="#">Menu Items</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" >
			            <span class="navbar-toggler-icon"><i class="fa fa-bars" ></i></span>
			        </button>
			        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
			            <ul class="navbar-nav" >
			                <li class="nav-item ">
							<a href="index.php" class="nav-link active">Home</a>
							</li>
							<li class="nav-item px-2">
								<a href="#" class="nav-link">Freebies</a>
							</li>
							<li class="nav-item px-2">
								<a href="mobile.php" class="nav-link">Mobile Recharge </a>
							</li>
							<li class="nav-item px-2">
								<a href="electronics.php" class="nav-link">Electronics </a>
							</li>
							<li class="nav-item px-2">
								<a href="#" class="nav-link">Restuarant </a>
							</li>
							<li class="nav-item px-2">
								<a href="travel.php" class="nav-link">Travel </a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Groceries </a>
							</li>
							<li class="nav-item px-2">
								<a href="#" class="nav-link">Student Discount</a>
							</li>
			            </ul>
			        </div>
			    </div>
			</nav>
		</div>
		
			<div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images/BANNER.png" class=" d-block w-100 slider-image" id="img-1">
			    </div>
			    <div class="carousel-item ">
			      <img src="images/img-1.jpg" class="d-block w-100" id="img-4">
			    </div>
			    <div class="carousel-item">
			      <img src="images/img-2.jpg" class="d-block w-100" id="img-2">
			    </div>
			    <div class="carousel-item">
			      <img src="images/img-3.jpg" class="d-block w-100" id="img-3">
			    </div>
			    <div class="carousel-item">
			      <img src="images/img-5.jpg" class="d-block w-100" id="img-5">
			    </div>
			  </div>
			<!--  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a> -->
			  <ol class="carousel-indicators">
			    <li data-target="#slider" data-slide-to="0" class="active"></li>
			    <li data-target="#slider" data-slide-to="1"></li>
			    <li data-target="#slider" data-slide-to="2"></li>
			    <li data-target="#slider" data-slide-to="3"></li>
			    <li data-target="#slider" data-slide-to="4"></li>
			  </ol>
			</div>

	</section>

	<!---------------featured categories -------------->
	<section class="featured-categories">
		<div class="container">
			<h2><span>Featured Categories</span></h2>
			<div class="row">
				<div class="col-md-4">
					<img src="images/cat-1.jpg">
				</div>
				<div class="col-md-4">
					<img src="images/cat-2.jpg">
				</div>
				<div class="col-md-4">
					<img src="images/cat-3.jpg">
				</div>
			</div>

		</div>
	</section>

	<!----------------- On sale products--------------->
	<section class="on-sale">
		<div class="container">
			<div class="title-box">
				<h2>New Offer</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/shirt.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Chinese Collar Shirt</h3>
						<h5><s>$30.00 </s>&nbsp; <b> $10.00</b></h5>
					</div>					
				</div>	

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/shirt.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Chinese Collar Shirt</h3>
						<h5><s>$30.00 </s>&nbsp; <b> $10.00</b></h5>
					</div>					
				</div>	

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/shirt.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Chinese Collar Shirt</h3>
						<h5><s>$30.00 </s>&nbsp; <b> $10.00</b></h5>
					</div>					
				</div>	

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/shirt.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Chinese Collar Shirt</h3>
						<h5><s>$30.00 </s>&nbsp; <b> $10.00</b></h5>
					</div>					
				</div>	

				
			</div>
		</div>
		
	</section>
	<!----------new product--------------->
	<section class="new-products">
		<div class="container">
			<div class="title-box">
				<h2>New Arrivals</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-1.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Fitness Watch</h3>
						<h5>$40.00</h5>
					</div>					
				</div>	

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-2.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<h3>Smart Watch</h3>
						<h5>$50.00</h5>
					</div>					
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-3.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Formal Shoes</h3>
						<h5>$20.00</h5>
					</div>					
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-4.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<i class="fa fa-star-o" ></i>
						<h3>Leather Watch</h3>
						<h5>$3000.00</h5>
					</div>					
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-1.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Fitness Watch</h3>
						<h5>$40.00</h5>
					</div>					
				</div>	

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-2.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<h3>Smart Watch</h3>
						<h5>$50.00</h5>
					</div>					
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-3.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<h3>Formal Shoes</h3>
						<h5>$20.00</h5>
					</div>					
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<img src="images/product-4.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star" ></i>
						<i class="fa fa-star-half-o" ></i>
						<i class="fa fa-star-o" ></i>
						<h3>Leather Watch</h3>
						<h5>$3000.00</h5>
					</div>					
				</div>


			</div>
		</div>
	</section>

	<!------------website features---------------->
	<section class="website-features">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6 feature-box">
					<img src="images/feature-1.png">
					<div class="feature-text">
						<p><b>100% Orignal Items</b> are available at company.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 feature-box">
					<img src="images/feature-2.png">
					<div class="feature-text">
						<p><b>Return within 30 days</b> of receiving your order.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 feature-box">
					<img src="images/feature-3.png">
					<div class="feature-text">
						<p><b>Get free delivery for every</b> order on more than price</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 feature-box">
					<img src="images/feature-4.png">
					<div class="feature-text">
						<p><b>Pay Online through multiple</b> options (card-Net banking)</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-----------footer----------->
	<section class="footer">
		<div class="container ">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6">
					<h1>Useful Links</h1>
					<p>Privacy Policy</p>
					<p>Terms Of Use</p>
					<p>Return Policy</p>
					<p>Discount Coupons</p>
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<h1>Company</h1>
					<p>About Us</p>
					<p>Contact Us</p>
					<p>Career</p>
					<p>Affliate</p>
				</div>

				<div class="col-md-3 col-sm-6 col-6">
					<h1>Follow Us On</h1>
					<p><i class="fa fa-facebook-official" ></i> Facebook</p>
					<p><i class="fa fa-youtube-play" ></i> Youtube</p>
					<p><i class="fa fa-linkedin" ></i> Linkedin</p>
					<p><i class="fa fa-twitter" ></i> Twitter</p>
				</div>

				<div class="col-md-3 col-sm-6 col-6 footer-image">
					<h1>Download App</h1>
					<img src="images/app-logo.png">	
				</div>

			</div>
			<hr>
			<p class="copyright">Made with <i class="fa fa-heart-o" ></i> by Shubham Bhagat</p>
		</div>
	</section>
	
	



<script type="text/javascript">
		window.onscroll= function(){myFunction()};
		var navbar = document.getElementById('navbar');
		var sticky = navbar.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky");
			} else {
				navbar.classList.remove("sticky");
			}
		}

		
	</script>





</body>
</html>