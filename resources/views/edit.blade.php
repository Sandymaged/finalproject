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

	<title>Edit T1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">




</head>

<body>
<div class="container">
	<div class="row">
		<div class="alll">
			<div class="frist">
			  
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
				<div class=" container col-md-9 rounded-3 " style="background-color: white;">
					<form action="{{route('update',$client->id)}}" method="post" class="row g-2 p-2">
						@csrf	
            <h3 class="fw-bold d-flex justify-content-center">PCR Result</h3>
			  <br> 
			  <br> 
			  <br> 

			<div class="row" >
						<div class="col">
							 <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i>Time</label>
							<input class="form-control" type="time" id="test_time" name="time" value="{{$client->time}}" >
						</div>

					 <div class="col">
						 <label for="mobile-number" class="form-label fw-bold"><i class="zmdi zmdi-paypal-alt"></i>Name</label>
						 <input  class="form-control" type="text" id="nameuser" placeholder="nameuser" name='nameuser' value="{{$client->nameuser}}">
						 <br>
						 
					 </div>
					 <div class="col">
						<label for="mobile-number" class="form-label fw-bold"><i class="zmdi zmdi-paypal-alt"></i>PCR Result</label>
						<input  class="form-control" type="text" id="result" placeholder="result" name='result' value="{{$client->result}}">
					   
					</div>
				 
				 <div class="row g-2">
					<button class="btn btn-primary fw-bold" type="submit">Update</button>
				  </div>
			</div>
		
		</form>
	</div>
</div>
</div>
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