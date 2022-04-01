
	  
	  <!doctype html>
	  <html lang="en">
		<head>
		  <!-- Required meta tags -->
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
		  <link rel="stylesheet" href="style.css">
	  <!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	  
		 
		  <title>psychological support</title>
		</head>
		<body>
		  <div class="container">
			  <div class="row">
				<section id="nav-section" >
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
				  <section>
			  </div>
		  </div>
	  
		  <div class="container" style="background-color:#C5C5C5;">
			<div class="row">
			  <div class="col-4">
				<img src="img/phys.png" alt="..." width="400" height="400">
			  </div>
			  <div class="col-6">
				<br>
				<br>
				<br>
				
				<br>
				<br>
				<h1><strong>Care For Yourself</strong></h1>
				<p>The COVID-19 pandemic has had a major effect on our lives. Many of us are facing challenges that can be stressful, overwhelming, and cause strong emotions in adults and children. Public health actions, such as social distancing, are necessary to reduce the spread of COVID-19, but they can make us feel isolated and lonely and can increase stress and anxiety. Learning to cope with stress in a healthy way will make you, the people you care about, and those around you become more resilient.</p>
				
				<br>
				<br>
			  </div>
			</div>
		  </div>
	  
	  
	  
		  <div class="container" style="background-color:#C5C5C5;">
			<div class="row d-flex justify-content-center" >
			  <div class="col-8">
				
				<br>
				<br>
				<h2>Tips to care for yourself one small way each day</h2>
				<br>
				<ul>
				  <li>Take breaks to unwind through yoga, music, gardening, or new hobbies</li>
				  <li>Find new ways to safely connect with family and friends, get support, and share feelings</li>
				  <li>Take care of your body and get moving to lessen fatigue, anxiety, or sadness</li>
				  <li>Treat yourself to healthy foods and get enough sleep</li>
				</ul>
				<br>
				<br>
				<h3>you can contact with your doctor:</h3>
				<br>
			  </div>
			</div>
		  </div>
	  
	  
	  
	  
	  
		  <div class="container "  style="background-color:#C5C5C5;">
			  <div class="row d-flex justify-content-center">
				<div class="col-1">
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/2.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.omnia tarek</h5>
						  <p class="card-text">
							<ul>
							  <li><strong>Phone: </strong>0123456789</li>
							  <li><strong>working times: </strong>from 10am to 5pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/1.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.samir elmasry</h5>
						  <p class="card-text">
							<ul>
							  <li><strong>Phone: </strong>0109875643</li>
							  <li><strong>working times: </strong>from 12am to 6pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/3.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.Osama helmy</h5>
						  <p class="card-text">
							<ul>
							  <li><strong>Phone: </strong>0112034567</li>
							  <li><strong>working times: </strong>from 1pm to 10pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/4.jpg" class="card-img-top" alt="..." style="height: 290px; padding:5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.Eslam Ibrahim</h5>
						  <p class="card-text">
							<ul>
							  <li><strong>Phone: </strong>01554798242</li>
							  <li><strong>working times: </strong>from 6am to 5pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"" style="margin-top: 5%; margin-bottom: 5%;">
						<img src="img/7.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.khaled hossam</h5>
						  <p class="card-text">
							<ul>
							  <li><strong>Phone: </strong>0128975425</li>
							  <li><strong>working times: </strong>from 10am to 5pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-1">
				</div>
				
	  
	  
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/12.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.sandra rafaat</h5>
						  <p class="card-text"><ul>
							<li><strong>Phone: </strong>0127425896</li>
							<li><strong>working times: </strong>from 12am to 6pm</li>
						  </ul></p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/11.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.salah allam</h5>
						  <p class="card-text"><ul>
							  <li><strong>Phone: </strong>0123456789</li>
							  <li><strong>working times: </strong>from 6pm to 12pm</li>
							</ul>
						  </p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/10.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">Dr.Ibrahim tamer</h5>
						  <p class="card-text"><ul>
							<li><strong>Phone: </strong>01023456787</li>
							<li><strong>working times: </strong>from 12 am to 6 am</li>
						  </ul></p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/9.jpg" class="card-img-top" alt="..." style="height: 290px; padding:5%;">
						<div class="card-body">
						  <h5 class="card-title">Heba abdallah</h5>
						  <p class="card-text"><ul>
							<li><strong>Phone: </strong>0154789632</li>
							<li><strong>working times: </strong>from 6am to 1pm</li>
						  </ul></p>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-2">
				  <div class="col">
					  <div class="card h-100" style="margin-top: 5%; margin-bottom: 5%;"">
						<img src="img/8.jpg" class="card-img-top" alt="..." style="padding: 5%;">
						<div class="card-body">
						  <h5 class="card-title">sameh saleh</h5>
						  <p class="card-text"><ul>
							<li><strong>Phone: </strong>0123464529</li>
							<li><strong>working times: </strong>from 1am to 5pm</li>
						  </ul></p>
						</div>
					  </div>
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
		</body>
	  </html>	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  