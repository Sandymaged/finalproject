<!DOCTYPE html>
<html>
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
<style>
	nav a{
		color: black;
	}
	body{
		background-image: linear-gradient(#376BF7, #cfd3d6);
		background-repeat: no-repeat;
  background-attachment: fixed;
	}
.container { 
  height: 600px;
  width: 900px;
 background-color: white;
  border: 3px solid rgb(22, 22, 27); 
  margin-left: 270px;
  margin-right: 250px;
  margin-top: 20px;
  
}
.smallcontainer{
  border: 2px solid rgb(22, 22, 27); 
  margin: 20px;
  
  
}

.img1{
 
float:right;
margin-top: 26px;
margin-right: 20px;
}
.text1{
  float:left;
  margin-left: 20px;
 
  
}
.hrr {
  border: 1px solid rgb(22, 22, 27);
  margin-top:200px;
}

</style>
</head>
<body>

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

@if ($b->result=='negative'||$b->result=='positive')
<div class="container">
  <div class="img1">
    <img src="img/Cov.PNG" alt="Avatar" class="image" style="width:120px;height:140px;"></div>
	<br>
   <div class="text1"> <p style="font-size:110%;font-family:sans-serif">Patient Name: {{$b->nameuser}}</p>
  <p style="font-size:110%;font-family:sans-serif">Tent Location: 
	@if( $b->tent=='tent1')
	مستشفي الايمان اسيوط العام
	 @elseif($b->tent=='tent2')
	  خلف جامعة اسيوط شارع كورنيش الابراهميه.			
	 @elseif($b->tent=='tent3')
	 بجوار موقف المعلمين الجديد الطريق الدائرى
	 @elseif($b->tent=='tent4')
	   جامعة اسيوط القديمة امام نادي القضاء
	@endif		

</p>
  <p style="font-size:110%;font-family:sans-serif">Referred by: TEAM COV EGY</p>
   </div>
 
 <hr class="hrr">
 <div><p style="margin-left:20px;color: blue;font-weight: bold;">TEST NAME <span style="margin-left: 300px;color: blue;font-weight: bold;">RESULT</span></p>
</div>
<div class="smallcontainer"><p>COVID-19 PCR Test <span style="margin-left: 250px;">{{$b->result}}</span></p></div>
<p style="font-size: 160%;margin-left:50px">This result tested by "PCR "Test</p>

</div>
<br>
@if($b->result=="positive" )
<div >
	<p style="margin-left: 270px; font-size:20px;">*Please help us to know places you visit before 3 days from corona symptoms.</p>
		<a href="http://localhost:8000/news">
		<button class="btn btn-primary fw-bold" style="margin-left: 1000px; margin-top:-70px;">Set Places</button></a>
</div>
@endif
<div>
	<button class="btn btn-primary fw-bold " onclick="window.print()" style="margin-left: 980px; width:130px;">Print</button>
</div>	
@else
	<h1 style="margin-left:550px; margin-top:140px; font-size:60px;">Loading...</h1>
@endif
</body>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  