<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
	<!-- main CSS -->
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}" />
	<title>Patient Drive – Medical Marketing Experts</title>
</head>

<body>
    <div id="wrapper"><!-- start header-area -->
    	<header>	
    		<div class="header-area"><!-- start header-area -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="logo">
		    						<a class="navbar-brand" href="{{route('welcome')}}">
			    						<figure>
			    							<img src="{{asset('images/logo.png')}}" alt="Logo" width="281" height="49">
			    						</figure>
		    						</a>
		    					</div> 
							</div>

							<div class="col-md-6">
								<div class="header-top-right">
		    						<a class="telephone" href="tel:304-3518">(800) 304-3518</a>
		    						<div class="req-conslt">
		    							<a href="#">Request a Consultation</a>
		    						</div>
		    					</div>

		    					<div class="clear"></div>
							</div>
						</div>	
					</div>
				</div>

		    	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active">
									<a class="nav-link" href="{{route('about-us')}}">about</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{route('leads_sales')}}">lead & Sales tools</a>
								</li>
							
								<li class="nav-item">
									<a class="nav-link" href="{{route('services')}}">marketing services</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{route('our_works')}}">view or WORK</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="{{route('contact')}}">CONTACT US</a>
								</li>
							</ul>
						</div>
	    			</div>
		    	</nav>
    		</div><!-- //end .header-area -->
    	</header>

    	@yield('content')
		
		<footer>
			<div class="container">
				<div class="footer-area">
					<p class="text-center">&copy; 2005-2019 Patient Drive. All Rights Reserved.</p>
				</div>
			</div>
		</footer>
    </div><!-- //end #wrapper -->

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/fontawesome.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- custom JavaScript -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>