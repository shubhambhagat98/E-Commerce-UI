<!DOCTYPE html>
<html>
<head>
	<title>Sign-up form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
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
				<li class="active"><a href="signup.php" >Sign Up</a></li>
				<li><a href="login.php">Login</a></li>
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
							<a href="index.php" class="nav-link">Home</a>
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
	</section>

	<section class="container-fluid">
		<div class="row justify-content-center">
			<div class=" col-sm-8 col-md-3">
				<img src="images/icon.png" class="user-icon">
				<form class="form-container" name="signup" action="includes/signup.inc.php" onsubmit="return signupvalidation()" method="post" >
					<h4 class="text-center font-weight-bold">Signup Form</h4>
				  
				  <div class="form-group">
				    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" >
				  </div>  
				  <div class="form-group">
				    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name"> 
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email"> 
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
				  </div>  
				  
				  <div class="form-group">
				    <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
				  </div>  
				  
				  <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
				</form>
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
	
	<!-----------validate sign up form------------------------->
	<script type="text/javascript">
     	function signupvalidation() {
		  

		    fail = "";
			fail += validateFirstname();
			fail += validateLastname();
	        fail += validatePassword();
	        fail += validateTelephone();
	        fail += validateEmail();
	        if   (fail == "")   
				return true;
	        else 
			{ 
				alert(fail); 
				return false; 
			}
	      
			function validateFirstname()
		      {
		      	var field = document.getElementById("firstname").value;
		        if (field == "") 
				  return "No Firstname was entered.\n";
		        else 
		          return "";
		      }

			function validateLastname()
		      {
		      	var field = document.getElementById("lastname").value;
		        if (field == "") 
				  return "No Lastname was entered.\n";
		        else 
		          return "";
		      }

		      function validateTelephone()
		      {
		      	var field = document.getElementById("contact").value;
		        if (field == "") 
				  return "No Contact number was entered.\n";
		        else if (/[^0-9]/.test(field))
		          return "Only digits allowed in contact number\n";
		      	else if (field.length < 10)
		          return "Pls enter valid contact number\n";
		        return "";
		      }

		      
			  
			  function validateEmail()
		      {
		      	var field = document.getElementById("email").value;
				var  count1 = 0, count2 = 0;
			    for(var i=0;i<field.length;i++)
					{ 
		       if(field.charAt(i)=='@')
						count1++;

		       if (field.charAt(i)=='.') 
		        count2++;
					}

		        if (field == "") 
					     return "No Email was entered.\n";
				    else if (/[^a-zA-Z0-9.@_-]/.test(field))
		            return "Only a-z, A-Z, 0-9, - , . and  _ allowed in email address.\n";
		        else if ((field.indexOf(".") == 0) || (field.indexOf("@") == 0) || (field.indexOf("-") == 0) || (field.indexOf("_") == 0) )
					      return "symbol . - _ @ cannot be the first character in email.";
				    else if (count1!=1 || count2<1)
					      return "@ symbol allowed only once in email and . should be given atleast once in email.";
				    else
				        return "";
		      }

		      function validatePassword()
		      {
		      	var field = document.getElementById("password").value;
		        if (field == "") 
				  return "No Password was entered.\n";
		        else if (field.length < 6)
		          return "Passwords must be at least 6 characters.\n";
		        else if (! /[a-z]/.test(field) ||  ! /[A-Z]/.test(field) || ! /[0-9]/.test(field))
		          return "Passwords require one each of a-z, A-Z and 0-9.\n";
				else
		          return "";
		      }
				} 
    </script>
	



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