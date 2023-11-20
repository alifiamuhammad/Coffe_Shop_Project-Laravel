<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    

  </head>
  <body>
   
    <script>
      // JavaScript to control the display of loading and content
      document.addEventListener("DOMContentLoaded", function() {
        var loadingContainer = document.getElementById("loadingContainer");
        var contentContainer = document.getElementById("ftco-navbar");
    
        // Simulating a delay (you can replace this with your actual content loading logic)
        setTimeout(function() {
          loadingContainer.style.display = "none";
          contentContainer.style.display = "block";
        }, 2000); // Adjust the delay as needed
      });
    </script>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/')}}">Coffee<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{url('menu')}}" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="{{url('service')}}" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
			   
				<li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
				<li class="nav-item cart"><a href="{{url('cart')}}" class="nav-link"><span class="icon icon-shopping_cart"></span></a>
				<li class="nav-item"><a href="{{url('login')}}" class="nav-link">login</a></li>
				<li class="nav-item"><a href="{{url('register')}}" class="nav-link">register</a></li>
  
			  </ul>
	      </div>
		  </div>
	  </nav>
	  