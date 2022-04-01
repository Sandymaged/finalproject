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

	<title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet1.css') }}">
</head>

<body>
	
	<div class="main">
		<div class="frist" style="margin-top:-50px;">	
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
		<br>
		<h5 style="margin-left:400px; ">Enter your data to get your pcr result please.</h5>

<div class=" container col-md-9 rounded-3 " style="background-color:white; width:900px ;height:400px; ">
			<br>
      
<form action="{{route('getted')}}" method="get" class="row g-2 p-2">
	@csrf
<div class="col-md-9" style="padding-left:250px; padding-top:20px;" >
<div class="row">	
	 <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-alt">User Name</i></label>
	<input class="form-control" type="text" name="nameuser"  placeholder='Enter FullName'>
</div>

<div class="row">
	<label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-alt">select your tent</i></label>
    <select class="form-select" aria-label="Default select example" name="tent">
     	<option value="tent1" name="tent">Tent 1</option>
    	<option value="tent2" name="tent">Tent 2</option>
	    <option value="tent3" name="tent">Tent 3</option>
    	<option value="tent4" name="tent">Tent 4</option>
    </select>
</div>

<div class="row" >	
	<label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-alt">Ticket Number</i></label>
	<input class="form-control" type="text" name="numrandom"  placeholder='Enter Ticket Number'>
</div>
<br>
<div class="row g-2" >
    <button class="btn btn-primary fw-bold" type="submit" style="margin-left:120px; width:130px; font-size:20px;">Done</button>
</div>
</div>
</form>
		</div>
	</div>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  