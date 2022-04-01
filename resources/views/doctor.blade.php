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

	<title>doctor</title>
    <link rel="stylesheet" href="{{ asset('css/doctor.css') }}">
</head>

<body>
<div class="alll">
   <div class="over">
    <div class="frist">
	  <div >
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
		<img class="one" src="img/WhatsApp Image 2021-02-22 at 5.28.35 AM (3).jpeg"/>
      </div>
	</div>
 </div>	
	<div class="second">
	          <div class="flexx">
	                <h2 class="two">Are you ready to know </h2>
	                <div class="three">
		                <h4 class="four">Why the doctors play very important role ??<h4>
		            </div>
	          </div>	
	   <p class="five">Doctors form an essential part of an effective response to the COVID-19 pandemic. 
		We argue they have a duty to participate in pandemic response due to their special skills,
		but these skills vary between different doctors, and their duties are constrained by other competing rights. 
		We conclude that while doctors should be encouraged to meet the demand for medical aid in the pandemic,
		those who make the sacrifices and increased efforts are owed reciprocal obligations in return. 
		When reciprocal obligations are not met, doctors are further justified 
		in opting out of specific tasks, as long as this is proportionate to the unmet obligation.</p>
 	 
	 
	    <p class="six"> 
	        Doctors and nurses are on the front lines in the face of the Coronavirus outbreak. 
	       They take great risks in their quest to save the sick, in addition to the tremendous psychological pressure as they see
	       those losing their lives due to disease. Their human experiences are unique and profound.</p>
	</div>
	<div class="third">
	   <div>
          <h2 class="seven">pulmonologist</h2>
          <p class="eight">Covid-19 infection may cause lung abnormalities that can be detected more than
		  three months after the infection of patients.</p>
		  <p class="eight">The scans showed signs of lung damage in patients who were short of breath,
           by highlighting areas where air does not flow easily into the blood.</p>
		   <p class="eight">Researchers said that as Covid-19 pneumonia moves slowly through the lungs, it leaves damaged lung tissue in its
              wake and contributes to high temperature,
                low blood pressure and organ damage common in patients with the virus.</p>
	  </div>
	  <div>
	     <div class="flexx">
	       <img class="nine" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM (4).jpeg"/>
		  <div>
	     <h5 class="ten">Doctor Ahmed Ezzat</h5>
		 <p class="eleven">Pulmonologist Specialized in Adult Internal Medicine, Respiratory Tract Allergy.</p>
	       <p class="eleven" >&#9193; Nasr City : Abbas el Akkad</p>
	    </div>
	  </div>
	  <div class="flexx">
	    <img class="ninee" src="img/WhatsApp Image 2021-04-04 at 3.35.56 AM.jpeg"/>
		<div>
	     <h5 class="tenn">Doctor Riham Hazem</h5>
	     <p class="eleven">Pulmonologist Specialized in Adult Internal Medicine and Pediatric Chest and Respiratory</p>
	      <p class="eleven" >&#9193; Nasr City : Mahdi Ibn Baraka </p>
	    </div>
	  </div>
	  <div class="flexx">
	    <img class="ninee" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM (6).jpeg"/>
		<div>
	     <h5 class="tenn">Doctor Mohamed Nagy</h5>
	     <p class="eleven">Pulmonologist Specialized in Adult Internal Medicine, and Pediatric Allergy and Immunology</p>
	      <p class="eleven" >&#9193; El-Dokki : 6al tahreer st </p>
	    </div>
	  </div>
	  </div>
	  
	</div>
	<div class="fourth">  
	    <h2 class="twelve" >Internal </h2>
	      <p class="thirteen">The Corona virus affects the respiratory system and does not affect the colon, but it is complications, 
		  adding: The virus causes irritation to 
		  the immune system and there are those who suffer strokes and kidney failure after recovering from Corona</p>
	    <div class="flexx">
		   <div class="divone">
		      <img class="imgone" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM (1).jpeg"/>
			  <h5 class="nameone">Magdy Siam </h5>
			  <p class="pone">Internist Specialized in Adult Diabetes and Endocrinology,
                  Adult Hepatology, Adult Gastroenterology and Endoscopy,
                   Adult Internal Medicine.</p>
			  <p class="pone" >&#9193; El-Haram : Zaky Nabwy </p>
		   </div>
	       <div class="divone">
		      <img class="imgone" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM.jpeg"/>
			  <h5 class="nameone">Sherihan Hemida </h5>
			  <p class="pone">Master of internal medicine Alexandria faculty of medicine Egyptian fellowship of internal medicine Member of EAEDA
                Internist Specialized in Adult Diabetes and Endocrinology
                 and Adult Internal Medicine</p>
			  <p class="pone" >&#9193; Bulkly : elhorreya road </p>
		   </div>
		   <div class="divone">
		      <img class="imgone" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM (3).jpeg"/>
			  <h5 class="nameone">Mohamed Kamal </h5>
			  <p class="pone">Consultant of Internal Medicine, Diabetology and Obesity management.
               Internist Specialized in Adult Diabetes and Endocrinology
                and Pediatric Diabetes and Endocrinology</p>
			  <p class="pone" >&#9193; El-Maadi : algazerr </p>
		   </div>
	         <div class="divone">
		      <img class="imgone" src="img/WhatsApp Image 2021-04-04 at 3.35.55 AM (7).jpeg"/>
			  <h5 class="nameone">Khaled Al Khateeb </h5>
			  <p class="pone">Specialist Of Internal Medicine and DiabetesInternist
                Specialized in Adult Diabetes and Endocrinology
                Adult Internal Medicine, Adult Cardiology
                and Adult Chest and Respiratory</p>
			  <p class="pone" >&#9193;New Cairo : North tessen </p>
		   </div>
	</div>  
	      <form method="get"  action="https://www.vezeeta.com/en">
		        <button type="submit" class="onebutton">See More</button>
		   </form> 
	  
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
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  