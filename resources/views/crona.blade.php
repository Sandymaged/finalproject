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

	<title>Coronavirus prevention</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="alll">
			<div class="frist">
			  <div>
			   <nav id="navsize" class="navbar navbar-expand-lg ">
						<div class="container-fluid">
							<a class="navbar-brand" href="{{ url('/') }}">
							  <p id="headercolor" class="fs-1" >CoV EGY </p>
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
			  <div class="fristt">
			  <img src="img/WhatsApp Image 2021-04-04 at 8.12.12 PM.jpeg" class="im">

			  <h2 class="oneheader">Protect Yourself and Others.</h2>
				<p class="onep">Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the 
				common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute
				Respiratory Syndrome (SARS-CoV). A novel coronavirus(nCoV) is a new strain that has not been previously 
				identified in humans.... . . </p>
				<form method="get"  action="https://www.unwomen.org/en/news/stories/2020/4/statement-ed-phumzile-violence-against-women-during-pandemic?gclid=Cj0KCQiApsiBBhCKARIsAN8o_4hpMD-oRy-oNV1_rKavE7XR0MYxHBqyTJbEDdsZI5sI2lHsrJwvmdAaAjZWEALw_wcB">
					<button type="submit" class="onebutton">See More</button>
				</form>
			  </div>
			</div>

			
			<div class="col-12" id="blueDiv">
				<div class="container">
					<div class="row">
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px; margin-left: 300px;">Stay at Home</h1>
							<p style="padding: 40px 40px 40px 40px; float:right;">
								COVID-19 spreads mainly among people who are in close contact (within about 6 feet) for a prolonged period. Spread happens when an infected person coughs, sneezes, or talks, and droplets from their mouth or nose are launched into the air and land in the mouths or noses of people nearby...
								<a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/social-distancing.html">Read More</a>

							</p>
						</div>
						<div class="col-4">
							<img src="img/stayhome2.png"  alt="Cinque Terre" style="width: 420px; float: right;">
						</div>
						
					</div>
				  </div>  
		    </div>



			

			<div class="col-12" id="whiteDiv" >
				<div class="container">
					<div class="row">
						<div class="col-4">
							<img src="img/saway.png"  alt="Cinque Terre" style="width: 420px;">
						</div>
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px;">avoid close contact</h1>
							<p style="padding: 40px;">
								Since people can spread the virus before they know they are sick, it is important to stay at least 6 feet away from others when possible, even if you—or they—do not have any symptoms . Social distancing is especially important for people who are at higher risk for severe illness from COVID-19.
								<a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/social-distancing.html">Read More</a>
							</p>
						</div>
					</div>
				  </div>  
		    </div>

			<div class="col-12" id="blueDiv" >
				<div class="container">
					<div class="row">
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px; margin-left: 300px;">wach your hands</h1>
							<p style="padding: 40px ; float:right;">
								Washing hands can keep you healthy and prevent the spread of respiratory and diarrheal infections from one person to the next. Germs can spread from other people or surfaces when you do few steps.
								<br>You can help yourself and your loved ones stay healthy by washing your hands often, especially during these key times when you are likely to get and spread germs:
								<a href="https://www.cdc.gov/handwashing/when-how-handwashing.html">Read More</a>
							</p>
						</div>
						<div class="col-4">
							<img src="img/ww.png"  alt="Cinque Terre" style="width: 420px; float: right;">
						</div>
						
					</div>
				  </div>  
		    </div> 

			<div class="col-12" id="whiteDiv" >
				<div class="container">
					<div class="row">
						<div class="col-4">
							<img src="img/c.png"  alt="Cinque Terre" style="width: 420px;">
						</div>
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px;">clean and disinfect</h1>
							<ul>
								<li>
									Wear disposable gloves to clean and disinfect and discard after use or use reusable gloves that are dedicated only for cleaning and disinfecting. Always wash hands after removing gloves.
								</li>
								<li>
									Clean any dirty surfaces using soap and water first, then use disinfectant.
								</li>
								<li>
									Clean or launder items according to the manufacturer’s instructions.
								</li>
								<li>
									Wash your hands often with soap and water for 20 seconds.
								</li>
								<li>
									If someone is sick, keep a separate bedroom and bathroom for the person who is sick (if possible).
								</li>
							</ul>
							<a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/disinfecting-your-home.html">Read More</a>

								
						</div>
					</div>
				  </div>  
		    </div>

			<div class="col-12" id="blueDiv" >
				<div class="container">
					<div class="row">
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px; margin-left: 300px;">wear a face mask</h1>
							<p style="padding: 10px ; float:right;">
								Masks are a simple barrier to help prevent your respiratory droplets from reaching others. Studies show that masks reduce the spray of droplets when worn over the nose and mouth.You should wear a mask, even if you do not feel sick. This is because several studies have found that people with COVID-19 who never develop symptoms (asymptomatic) and those who are not yet showing symptoms (pre-symptomatic) can still spread the virus to other people. Wearing a mask helps protect those around you, in case you are infected but not showing symptoms.
								<a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/cloth-face-cover-guidance.html">Read More</a>
							</p>
						</div>
						<div class="col-4">
							<img src="img/wear a mask 2.png"  alt="Cinque Terre" style="width: 420px; float: right;">
						</div>
						
					</div>
				  </div>  
		    </div>

			<div class="col-12" id="whiteDiv" >
				<div class="container">
					<div class="row">
						<div class="col-4">
							<img src="img/cover.png"  alt="Cinque Terre" style="width: 420px;">
						</div>
						<div class="col-8">
							<h1 style="margin-top:80px; font-size: 50px;">cover coughs and sneezes</h1>
							<p style="padding: 40px;">Covering coughs and sneezes and keeping hands clean can help prevent the spread of serious respiratory illnesses like influenza, respiratory syncytial virus (RSV), whooping cough, and COVID-19. Germs can be easily spread by:
								<br> -Coughing, sneezing, or talking
								<br> -Touching your face with unwashed hands after touching contaminated surfaces or objects
								<br> -Touching surfaces or objects that may be frequently touched by other people
								<a href="https://www.cdc.gov/healthywater/hygiene/etiquette/coughing_sneezing.html">Read More</a>
							</p>
						</div>
					</div>
				  </div>  
	
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
	</div>
</div>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
	<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>