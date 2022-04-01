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
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Main CSS -->
<link href="{{ asset('css/stylesheet2.css') }}" rel="stylesheet" >
<!-- zmdi font CSS for icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<title>Ticket</title>

</head>

<div class="container">
	<div class="row">
		<div class="alll">
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
	</div>
</div>
<br>
<section class="container" id="ticket">
	<div class="row d-flex justify-content-center" style="margin-top: -90px">
		<article class="card fl-left">
		  <section class="date">
			<time datetime="23th feb">
			  <span>Date</span> <br><span>{{ $a->date }}</span><br>
			  <span style="color: #2b2b2b;font-weight: 600;font-size: 180%">Time</span><br><span>{{ $a->time }}</span>
			</time>
		  </section>
		  <section class="card-cont py-3">
			<div class="row g-2 " id="inf-div">
				<div class="d-flex justify-content-start">
					<div class="col-6">
						<div class="row">
							<p><span>Name:</span></br>{{ $a->nameuser }}</p>
						</div>
						<div class="row">
							<p><span>Tent:</span>{{$a->tent}}</p>
							@if( $a->tent=='tent1')
							<p>مستشفي الايمان اسيوط العام</p>		
	                         @elseif($a->tent=='tent2')
	                         <p> خلف جامعة اسيوط شارع كورنيش الابراهميه.</p>			
	                         @elseif($a->tent=='tent3')
	                         <p>بجوار موقف المعلمين الجديد الطريق الدائرى</p>
	                         @elseif($a->tent=='tent4')
	                           <p>جامعة اسيوط القديمة امام نادي القضاء</p>
                        	@endif		
	
						</div>
						<div class="row">
							<p><span>Tic Number:</span></br>{{ $a->numrandom}}</p>
						</div>
						
						
					</div>
					<div class="col-6">
						<p style="color: #2b2b2b;">*Each tent has specific time from 9am to 9pm,  it is better to go on your time.</p>
						<p style="color: #2b2b2b;">*Please take all precautions.</p>
						<p style="color: #2b2b2b;">*Please wear your mask and your glaves.</p>
						<p style="color: #2b2b2b;">*Please if it possible, go by your car.</p>
						<p style="color: #2b2b2b;">*Try to help us to be safe.</p>


					</div>

				</div>
			</div>
		  </section>
		</article>
		<div class=" d-flex justify-content-end d-print-none mt-5" >
			<a href="http://localhost:8000/location">
			<button class="btn btn-primary fw-bold m-2 p-2 ">Enter location to comfirm your reservation</button></a>
		
			<button class="btn btn-primary fw-bold m-2 p-2 " onclick="window.print()">Print</button>
		</div>
		

	</div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
	
 