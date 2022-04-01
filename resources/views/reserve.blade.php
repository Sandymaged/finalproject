
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="{{ asset('css/stylesheet1.css') }}" rel="stylesheet" >
    <!-- zmdi font CSS for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    
    <title>Reverse</title>
  
<style>

 html, body {
        height: 100%;
    }
#map {
	height: 35%;
	width: 70%;
	margin-left:170px; 
	}
</style>


  </head>
  <body>
 
    <div class="main">
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
		</div>


		<h2 class="fw-bold d-flex justify-content-center">Test Registration</h2>
			   
           
      <div class=" container col-md-9 rounded-3 " style="background-color: white; width:1600px ;height: 1000px; ">
	  <br>

		<div id="map"> </div>
	<p class="x">*zoom in to get tent location.</p>
			<form action="{{route('gett')}}" method="post" class="row g-2 p-2">
				@csrf
          <div class="col-md-6">
		  
			
			<div class="row g-2">
              <div>
                <label for="name" class="form-label fw-bold"><i class="zmdi zmdi-gps-dot" style="padding-top:0px;"></i> Choose Tent</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tent" value="tent1">
                <label class="form-check-label " for="tent_1"><h6>Tent 1</h6></i></label>
				<p>
					&nbsp;<i class="zmdi zmdi-phone zmdi-hc-lg"></i> +201543675478<br>
					&nbsp;<i class="zmdi zmdi-time zmdi-hc-lg"></i>  hours: from 9 AM to 5 PM<br>
					&nbsp;<i class="zmdi zmdi-pin-drop zmdi-hc-lg"></i> 
مستشفي الايمان اسيوط العام
<br>
				</p>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="radio" name="tent" value="tent2">
                <label class="form-check-label" for="tent_2"><h6>Tent 2</h6></label>
				<p>
					&nbsp;<i class="zmdi zmdi-phone zmdi-hc-lg"></i> +201056723412<br>
					&nbsp;<i class="zmdi zmdi-time zmdi-hc-lg"></i>  hours: from 9 AM to 5 PM<br>
					&nbsp;<i class="zmdi zmdi-pin-drop zmdi-hc-lg"></i> خلف جامعة اسيوط شارع كورنيش الابراهميه. 
					<br></p>
              </div>
			  <div class="form-check ">
                <input class="form-check-input" type="radio" name="tent" value="tent3">
                <label class="form-check-label" for="tent_3"><h6>Tent 3</h6></label>
				<p>
					&nbsp;<i class="zmdi zmdi-phone zmdi-hc-lg"></i> +201223568323<br>
					&nbsp;<i class="zmdi zmdi-time zmdi-hc-lg"></i>  hours: from 9 AM to 5 PM<br>
					&nbsp;<i class="zmdi zmdi-pin-drop zmdi-hc-lg"></i>بجوار موقف المعلمين الجديد الطريق الدائري
					<br></p>
              </div>
			  <div class="form-check ">
                <input class="form-check-input" type="radio" name="tent" value="tent4">
                <label class="form-check-label" for="tent_4"><h6>Tent 4</h6></label>
				<p>
					&nbsp;<i class="zmdi zmdi-phone zmdi-hc-lg"></i> +201287695436<br>
					&nbsp;<i class="zmdi zmdi-time zmdi-hc-lg"></i>  hours: from 9 AM to 5 PM<br>
					&nbsp;<i class="zmdi zmdi-pin-drop zmdi-hc-lg"></i>  جامعة اسيوط القديمة امام نادي القضاء
					<br>
				</p>
              </div>
			  <br>
			  @error('tent')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
		  
          <div class="col-md-6">



<br>
<br>

<div class="row " >
	<div class="col" >
		<div>
		 <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-alt"></i>User Name</label>
		</div>
		<input class="form-control" type="text" name="nameuser"  placeholder='Enter UserName'>
	</div>
	<br>
	@error('nameuser')
	<small class="form-text text-danger">{{$message}}</small>
	@enderror
	<div class="col">
		<div>
		 <label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i>Gender</label>
		</div>
		<input class="form-check-input" type="radio" name="gender" value="male">
		<label class="form-check-label " ><h6>Male</h6></i></label>

		<input class="form-check-input" type="radio" name="gender" value="female">
		<label class="form-check-label "><h6>Female</h6></i></label>

	</div>
	<br>
	@error('time')
	<small class="form-text text-danger">{{$message}}</small>
	@enderror
</div>
<div class="row g-2" >
				   <div class="col">
					   <div>
						<label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Select date</label>
					   </div>
					   <input class="form-control" type="date" id="test_date" name="date">
				   </div>
				   <br>
				   @error('date')
				   <small class="form-text text-danger">{{$message}}</small>
				   @enderror
				   <div class="col">
					   <div>
						<label for="date-of-birth" class="form-label fw-bold"><i class="zmdi zmdi-calendar"></i> Select time</label>
					   </div>
					   <input class="form-control" type="time" id="test_time" name="time" >
				   </div>
				   <br>
				   @error('time')
				   <small class="form-text text-danger">{{$message}}</small>
				   @enderror
			   </div>
			<div class="row g-3" >
				<div class="col">
					<label for="mobile-number" class="form-label fw-bold"><i class="zmdi zmdi-smartphone-ring"></i> Mobile Number</label>
					<input  class="form-control" type="text" id="firstname" placeholder="ex:01234567890" name='phone'>
					<br>
					@error('phone')
					<small class="form-text text-danger">{{$message}}</small>
					@enderror
				</div>
				
				<div class="col">
					<label for="mobile-number" class="form-label fw-bold"><i class="zmdi zmdi-paypal-alt"></i> Enter your card number</label>
					<input  class="form-control" type="text" id="cardnumber" placeholder="ex:4200000000000000" name='credit'>
					<br>
					@error('credit')
					<small class="form-text text-danger">{{$message}}</small>
					@enderror
				</div>
			</div>
			
		    
		  <div class="row g-2">
			  
            <button class="btn btn-primary fw-bold" type="submit">Done</button>
          </div>
		  <br><br>
		  @if(Session::has('fail'))
		  <div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Ohh sorry</strong> {{Session::get('fail')}}

		  </div>
		  
		  </div>
		  @endif
          </div>
        </form>
      </div>
    </div>

    





	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyBiguxwnjCi4zYMJBNj4mB86Kf-jG-pRfw">
</script>


<script>
	/**
	 * Create new map
	 */
	var infowindow;
	var map;
	var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
	var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
	var myOptions = {
		zoom: 13.3,
		center: new google.maps.LatLng(27.186813,  31.179000),
		mapTypeId: 'roadmap'
	};
	
	map = new google.maps.Map(document.getElementById('map'), myOptions);

	/**
	 * Global marker object that holds all markers.
	 * @type {Object.<string, google.maps.LatLng>}
	 */
	const svgMarker = {
path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
fillColor: "blue",
fillOpacity: 0.6,
strokeWeight: 0,
rotation: 0,
scale: 2,
anchor: new google.maps.Point(15, 30),
};

	
var marker = [
	{
	  coords:{lat: 27.177455132051100, lng: 31.18336973104666 },
	  content:'<h5>tent num1</h5> <br> <p style="font-size:22px"> مستشفي اسيوط العام <br> شارع 23 يوليو <p>'
	},
	{
	  coords:{ lat: 27.168701, lng: 31.198784 },
	  content:'<h5>tent num3</h5><br> <p style="font-size:22px">  بجوار مواقف المعلمين الجديد   <br> الطريق الدائري <p>'
	},
	{
	  coords:{ lat: 27.19796309805047, lng: 31.18393845508467 },
	  content:'<h5>tent num4</h5><br> <p style="font-size:22px">جامعة اسيوط القديمه  <br>    امام نادي القضاه<p>'

	}, 
	{
	  coords:{ lat: 27.188484, lng: 31.161253 },
	  content:'<h5>tent num2</h5><br> <p style="font-size:22px">  خلف جامعةاسيوط <br>   شارع كورنيش الابراهيميه<p>'

	} 


  ];

  // Loop through markers
  for(var i = 0;i < marker.length;i++){
	// Add marker
	addMarker(marker[i]);
  }

  // Add Marker Function
  function addMarker(props){
	var marker = new google.maps.Marker({
	  position:props.coords,
	  map:map,
	  icon:svgMarker

	});

	if(props.content){
	  var infoWindow = new google.maps.InfoWindow({
		content:props.content
	  });

	  marker.addListener('click', function(){
		infoWindow.open(map, marker);
	  });
	}
  }


	function downloadUrl(url, callback) {
		var request = window.ActiveXObject ?
			new ActiveXObject('Microsoft.XMLHTTP') :
			new XMLHttpRequest;

		request.onreadystatechange = function() {
			if (request.readyState == 4) {
				callback(request.responseText, request.status);
			}
		};

		request.open('GET', url, true);
		request.send(null);
	}


</script>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  
</body>
  
</html>