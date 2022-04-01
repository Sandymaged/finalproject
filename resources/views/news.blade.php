<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('css/stylesheet3.css') }}">
    <!-- zmdi font CSS for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    
    <title>Places</title>
  </head>
  <body>
	  <br>
	  
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
    <div class="main ">
      <div class="container col-md-6 rounded-3 px-5" style="background-color:white;">
		<p style="padding-top: 10px; color:grey; font-size:20px;">* Enter places you visited before get pcr to help people to avoid this places.</p>
			<form action="{{route('newsin')}}" method="post" class="row g-2 py-5">
				@csrf
          <div class="row g-2">
            <div class="col shadow p-2 mb-5 me-3 bg-white rounded">
              <label for="name" class="form-label fw-bold"><i class="zmdi zmdi-account material-icons-name"></i> Name(*set you nickname or name you want to view.)</label>
			  <input type="text" class="form-control new-class" id="patientName" placeholder="eg:patient1,mina" name="userr">
            </div>
			<br>
			@error('userr')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
			<div class="col shadow p-2 mb-5 bg-white rounded">
			  <div>
				<label for="name" class="form-label fw-bold"><i class="zmdi zmdi-male-female"></i> Gender</label>
			  </div>
			  <div class="form-check col">
				<input class="form-check-input" type="radio" name="gender" id="male">
				<label class="form-check-label" for="male">Male <i class="zmdi zmdi-male-alt"></i></label>
			  </div>
			  <div class="form-check ">
				<input class="form-check-input" type="radio" name="gender" id="female">
				<label class="form-check-label" for="female">Female <i class="zmdi zmdi-female"></i></label>
			  </div>
            </div>
			<br>
			  @error('gender')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
          </div>
		  <div class="row g-2 shadow p-2 mb-5 bg-white rounded">
            <div class="col-12">
			  <label for="FirstLocation" class="form-label fw-bold"><i class="zmdi zmdi-map"></i> First location</label>
			  <textarea class="form-control" aria-label="With textarea" placeholder="eg:church,coffee,university" name="place1"></textarea>
            </div>
			
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Date Of visit</label>
			  <input class="form-control" type="date" id="DOV1" name="dov1">
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-time"></i> Time Of visit</label>
			  <input class="form-control" type="time" id="birthday" name="tov1">
            </div>
          </div>
		  <div class="row g-2 shadow p-2 mb-5 bg-white rounded">
            <div class="col-12">
			  <label for="SecondLocation" class="form-label fw-bold"><i class="zmdi zmdi-map"></i> Second location</label>
			  <textarea class="form-control" aria-label="With textarea" placeholder="eg:church,coffee,university" name="place2"></textarea>
            </div>
			
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Date Of visit</label>
			  <input class="form-control" type="date" id="DOV2" name="dov2">
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-time"></i> Time Of visit</label>
			  <input class="form-control" type="time" id="birthday" name="tov2">
            </div>
          </div>
		  <div class="row g-2 shadow p-2 mb-5 bg-white rounded">
            <div class="col-12">
			  <label for="ThirdLocation" class="form-label fw-bold"><i class="zmdi zmdi-map"></i> Third location</label>
			  <textarea class="form-control" aria-label="With textarea" placeholder="eg:church,coffee,university" name="place3"></textarea>
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Date Of visit</label>
			  <input class="form-control" type="date" id="DOV3" name="dov3">
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-time"></i> Time Of visit</label>
			  <input class="form-control" type="time" id="birthday" name="tov3">
            </div>
          </div>
		  <div class="row g-2 shadow p-2 mb-5 bg-white rounded">
            <div class="col-12">
			  <label for="FourthLocation" class="form-label fw-bold"><i class="zmdi zmdi-map"></i> Fourth location</label>
			  <textarea class="form-control" aria-label="With textarea" placeholder="eg:church,coffee,university" name="place4"></textarea>
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Date Of visit</label>
			  <input class="form-control" type="date" id="DOV4" name="dov4" >
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-time"></i> Time Of visit</label>
			  <input class="form-control" type="time" id="birthday" name="tov4">
            </div>
          </div>
		  <div class="row g-2 shadow p-2 mb-5 bg-white rounded">
            <div class="col-12">
			  <label for="FifthLocation" class="form-label fw-bold"><i class="zmdi zmdi-map"></i> Fifth location</label>
			  <textarea class="form-control" aria-label="With textarea" placeholder="eg:church,coffee,university" name="place5"></textarea>
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Date Of visit</label>
			  <input class="form-control" type="date" id="DOV5" name="dov5">
            </div>
			<div class="col">
			  <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-time"></i> Time Of visit</label>
			  <input class="form-control" type="time" id="birthday" name="tov5">
            </div>
          </div>
		  
          
          <div class="row g-2">
            <button class="btn btn-primary fw-bold" type="submit">Register</button>
          </div>
        </form>

      </div>
    </div>

    







    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  