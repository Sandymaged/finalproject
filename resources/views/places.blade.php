<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="css\stylesheet.css" rel="stylesheet" >
    <!-- zmdi font CSS for icons-->
    <link rel="stylesheet" href="{{ asset('css/stylesheet4.css') }}">
    
    <title>Places</title>
  </head>

<body>
<div class="frist" style="margin-top:-20px;">	
		<nav id="navsize" class="navbar navbar-expand-lg ">
				 <div class="container-fluid">
					 <a class="navbar-brand" href="">
					   <p id="ss" class="fs-1" >CoV EGY    </p>
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
<div class="main">	
    <div class="container col-md-8 rounded-3 p-2">
		  @foreach ($clients as $item)
		  @if(!empty($item->place1)||!empty($item->place2)||!empty($item->place3)||!empty($item->place4)||
		  !empty($item->place4))
		<div class="row g-2 shadow p-3 mb-5 bg-white rounded">
			  
            <h3><i class="zmdi zmdi-account" style="color:#ff2f43;"></i> {{$item->userr}}</h3>
			<div class="row g-2 shadow bg-white rounded">
				@if(!empty($item->place1))
			   <div class="col-4">
					<p><span>Place visited : </span>{{$item->place1}}</p>
				</div>
				<div class="col-4">
					<p><span>Date of visit : </span> {{$item->dov1}} </p>
				</div>
				@if($item->tov1!='00:00:00')
				<div class="col-4">
					<p><span>Time of visit : </span>{{$item->tov1}} </p>
				</div>
				@endif
				@endif
			</div>
			<div class="row g-2 shadow bg-white rounded">
				@if(!empty($item->place2))
			   <div class="col-4">
					<p><span>Place visited : </span>{{$item->place2}}</p>
				</div>
				<div class="col-4">
					<p><span>Date of visit : </span> {{$item->dov2}} </p>
				</div>
				@if($item->tov2!='00:00:00')
				<div class="col-4">
					<p><span>Time of visit : </span>{{$item->tov2}} </p>
				</div>
				@endif
				@endif
			</div>

			<div class="row g-2 shadow bg-white rounded">
				@if(!empty($item->place3))
			   <div class="col-4">
					<p><span>Place visited : </span>{{$item->place3}}</p>
				</div>
				<div class="col-4">
					<p><span>Date of visit : </span> {{$item->dov3}} </p>
				</div>
				@if($item->tov3!='00:00:00')
				<div class="col-4">
					<p><span>Time of visit : </span>{{$item->tov3}} </p>
				</div>
				@endif
				@endif
			</div>

			<div class="row g-2 shadow bg-white rounded">
				@if(!empty($item->place4))
			   <div class="col-4">
					<p><span>Place visited : </span>{{$item->place4}}</p>
				</div>
				<div class="col-4">
					<p><span>Date of visit : </span> {{$item->dov4}} </p>
				</div>
				@if($item->tov4!='00:00:00')
				<div class="col-4">
					<p><span>Time of visit : </span>{{$item->tov4}} </p>
				</div>
				@endif
				@endif
			</div>

			<div class="row g-2 shadow bg-white rounded">
				@if(!empty($item->place5))
			   <div class="col-4">
					<p><span>Place visited : </span>{{$item->place5}}</p>
				</div>
				<div class="col-4">
					<p><span>Date of visit : </span> {{$item->dov5}} </p>
				</div>
				@if($item->tov5!='00:00:00')
				<div class="col-4">
					<p><span>Time of visit : </span>{{$item->tov5}} </p>
				</div>
				@endif
				@endif
			</div>
        </div>

		
		  @endif
		  @endforeach		 
    </div>
</div>

    







    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  

</body>
</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  