	<!doctype html>
	<html lang="en">
	
	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
		<title>aboutt</title>
		<link rel="stylesheet" href="{{ asset('css/aboutt.css') }}">
	</head>
	
	<body>
	  <div class="all">
	
	 <div class="frist">
		  <div>
		    <nav id="navsize" class="navbar navbar-expand-lg ">
				<div class="container-fluid">
					<a class="navbar-brand" href="{{ url('/') }}">
					  <p id="headercolor" class="fs-1" >CoV EGY    </p>
					</a>
					<button id="butt" class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span id="search" class="form-control me-2">MORE</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul  class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item" >
                               <a id="home" class="nav-link"    aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
							<li class="nav-item" >
                               <a class="nav-link " id="doctor" aria-current="page" href="{{ url('doctor') }}">Doctor</a>
                            </li>
							<li class="nav-item">
                               <a class="nav-link " id="doctor" aria-current="page" href="{{ url('phys') }}">Psychological</a>
                            </li>
							<li class="nav-item">
                               <a class="nav-link " id="doctor" aria-current="page" href="{{ url('about') }}">About</a>
                            </li>
							<li class="nav-item">
                               <a class="nav-link " id="doctor" aria-current="page" href="{{ url('profile') }}">Profile</a>
                            </li>
						</ul>
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
									<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
								@endif
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										  {{ Auth::user()->name }} <span class="caret"></span>
									</a>
	
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
					</div>
				</div>
		</nav>
		  </div>
	</div>
	<div class="second">
		 <div> <h1 class="hone">let go  know more about project and know all avaliable option in us project   </h1> </div>
		  <div> <p class="htwo">our project talk about 3 layer
				all layer represent goal to protect your self from infection and people near by and can know about best doctors for
				 Internal and pulmonologist and self support and know new news for covid 19 around world </p></div>
	</div>  
	<div class="second">
	
		<div class="one"><h1> 1 </h1></div>
		<div class="two"><h1> 2 </h1> </div>
		<div class="two"> <h1> 3 </h1></div>
	</div>
	<div class="second">
	
		<h3 class="hthree"> Our<span class="bluee"> Qualified Team </span>can help you to make pcr test by Reservation date to make the test after result test you can
			 know if you infection or not </h3>
		<h3 class="hfour"> Our<span class="bluee"> Qualified Team </span> can help you to know the infected people near by you by determine your location by that you can know who infected 
			,can you protect your self by used precautionary measures or leave the location</h3>
		<h3 class="hfour"> Our<span class="bluee"> Qualified Team </span> can help to know when have the places and no have any infected people
	by show all place when have the infected person by after that you can decision if you want go or not
	</div>
	<footer class="bg-light text-center text-white" id="foooter">
		<!-- Grid container -->
		<div class="container p-4 pb-0">
		  <!-- Section: Social media -->
		  <section class="mb-4">
			<!-- Facebook -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #3b5998;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-facebook-f"></i
			></a>
	  
			<!-- Twitter -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #55acee;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-twitter"></i
			></a>
	  
			<!-- Google -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #dd4b39;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-google"></i
			></a>
	  
			<!-- Instagram -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #ac2bac;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-instagram"></i
			></a>
	  
			<!-- Linkedin -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #0082ca;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-linkedin-in"></i
			></a>
			<!-- Github -->
			<a
			  class="btn btn-primary btn-floating m-1"
			  style="background-color: #333333;"
			  href="#!"
			  role="button"
			  ><i class="fab fa-github"></i
			></a>
		  </section>
		  <!-- Section: Social media -->
		</div>
		<!-- Grid container -->
	  
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		  © 2021 Copyright:
		  <a class="text-white" href="https://mdbootstrap.com/">CoV_EGY.com</a>
		</div>
		<!-- Copyright -->
	  </footer> 
	  <script src="{{ asset('js/app.js') }}" defer></script>

	</body>

	</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  