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
		

	<!-------------navigation bar------------------->
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
							<a href="index.php" class="nav-link ">Home</a>
							</li>
							<li class="nav-item px-2">
								<a href="#" class="nav-link">Freebies</a>
							</li>
							<li class="nav-item px-2">
								<a href="mobile.php" class="nav-link active">Mobile Recharge </a>
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
	</section>

	<section class="page-title">
		
		  <div class="page-background">
		    <div class="page-header">
		    	<h2>Mobile Recharge Offers</h2>
		    <ul>
		    	<li><a href="index.php"><i class="fa fa-home"></a></i></li>
		    	<li><h4>/ </h4></li>
		    	<li><h4>&nbsp;Mobile Recharge Offers</h4></li>
		    </ul>  
		    </div>

		  </div>
		        
		
	</section>
		
	

<!----------------product desscrition-------------->

	<section class="Mobile">
		

		<div class="container">
			<div class="title-box">
				<h2>Recharge</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-idea.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-idea.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-idea.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-idea.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-vodafone.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-vodafone.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-vodafone.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-vodafone.jpg"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-airtel.png"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-airtel.png"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-airtel.png"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 col-6">
					<div class="product-top">
						<a href="product.php"><img src="images/paytm-airtel.png"></a>
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Wish list"><i class="fa fa-heart-o" ></i></button>
							<button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart" ></i></button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<h3>paytm cash back offer</h3>
						<h5><b>$2.00</b></h5>
						<br>
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