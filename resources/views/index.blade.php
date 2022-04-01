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

	<title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/h.css') }}">
</head>

<body>
  <div class="all">

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
	  <h2 class="oneheader">Coronavirus threatens the world .</h2>
	    <p class="onep">Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the 
		common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute
		Respiratory Syndrome (SARS-CoV). A novel coronavirus(nCoV) is a new strain that has not been previously 
		identified in humans.... . . </p>
		<form method="get"  action="https://www.unwomen.org/en/news/stories/2020/4/statement-ed-phumzile-violence-against-women-during-pandemic?gclid=Cj0KCQiApsiBBhCKARIsAN8o_4hpMD-oRy-oNV1_rKavE7XR0MYxHBqyTJbEDdsZI5sI2lHsrJwvmdAaAjZWEALw_wcB">
		   {{--button type="submit" class="onebutton">See More</button>--}}
			<button type="submit" class="btn btn-outline-primary" style="margin-left: 880px;">See More</button>

		</form>
		
		
		
		
		<div class="divone">
		  <div >
	           <h3 class="twoheader">CoviD Testing </h3> 
	           <h2 class="threeheader">Our <span class="bluecolor">Qualified Team</span> is Ready To Help you For Test</h2>
		        <div class="third">
		            <img  class="twop" src="img\WhatsApp Image 2021-02-23 at 1.02.25 AM.jpeg"/>
		             <p class="bcr" ><span class="bluecolor"> Initial Test:- </span> if you suspect you are infected with the
					 coronavirus ,you can answer some of questions , initially but never confirmed infection </p>
                </div>
				<div class="buttonn">
				  <form method="get"  action="{{url('create')}}">
					<button type="submit" class="btn btn-outline-primary" style="margin-left: 650px; width:80px;">Test</button>
				</form>
					</div>
				<div class="third">
		            <img  class="twop" src="img\WhatsApp Image 2021-02-23 at 1.02.25 AM (2).jpeg"/>
		             <p class="bcr" ><span class="bluecolor"> PCR:- </span>This is the most sensitive test for detecting an active 
					 infection and its results are very accurate, as a health care provider collects mucus from your nose or throat using
                         a specialized swab.
						 PCR tests are used to directly screen for the presence of viral RNA, which will be detectable in the body 
						 before antibodies form or symptoms of the disease are present. </p>
                </div>
				
				<div class="buttonn">
				    <form method="get"  action="{{url('reserve')}}">
						<button type="submit" class="btn btn-outline-primary" style="margin-left: 650px; width:80px;">Test</button>
		            </form>
				</div>	
				
            </div>
			<div>
			   <div class="divonee">
			       <img class="photoone" src="img\WhatsApp Image 2021-02-22 at 9.23.53 AM (3).jpeg"/>
			   </div>
            </div>

        </div>
		
		<div >
		   <div class="flexx"> 
		       <img  class="newphoto" src="img\How to Easily Hack Gmail Account without Password [100% Working].png"/>
		       <div class="newdiv">
		            <h3 class="newh">To know the test result</h3>
		       </div>
			</div>
            <div class="newdivv">
			    <h3 class="newh"> Go to the Profile</h3>
                <form method="get"  action="{{url('profile')}}"> 
					<button type="submit" class="btn btn-outline-primary" style="margin-left: 90px; width:80px; margin-top:30px;">Profile</button>
				</form>
            </div>				
		</div>
		
		<div class="divtwo">
		   <h2 class="fourheader">Our <span class="bluecolor">Qualified Team</span> is Ready To Help you For Know Test Step</h2>
		</div>
		
		
		
		
        <div class="divthree">
		    <div class="flexx">
		    <p class="step"> <span class="whitecolor">step 1 :- </span>The double helix of the two DNA strands is separated into a single strand by a process of denaturation 
			(denaturation) by heating it to a temperature of 94-95°C.</p>
			<p class="step"> <span class="whitecolor">step 2 :- </span>
              The initiator whose nuclear sequence is known is added to the single nucleic acid, and then the process of cooling and strengthening is 
              carried out by lowering the temperature to 37 °C.</p>
			  <p class="step"> <span class="whitecolor">step 3 :- </span>
                DNA is elongated at 70-75°C using a heat-resistant enzyme. The three steps of heating and strengthening are repeated 
                 until finally a Unit length double stranded DNA is obtained</p>
		   </div>
		  
		   <img class="phototwo" src="img\WhatsApp Image 2021-02-22 at 9.23.53 AM (1).jpeg"/>
		   <img class="phototwo" src="img\WhatsApp Image 2021-02-22 at 9.23.53 AM.jpeg"/>
		   <img class="phototwo" src="img\WhatsApp Image 2021-02-22 at 9.18.21 AM (4).jpeg"/>
		</div>
		
		
		
		
		
		
		
		
		
		
		<div class="divfour">
		    <div class="fourdiv">
			
			  <div class="photofour"> <img src="img\pie-chart-design-template-business-260nw-457709827.jpg" /></div>

			
		    </div>
		    <div >
			<h3 class="fiveheader">Mapping </h3> 
			 <h2 class="sixheader">near by <span class="bluecolor">infected </span>people</h2>
			 <h6 class="sixheader">you can know the infected people near you by open your location .</h6>
			<h6 class="sixheader"> Then you will care your self by take the precautionary measures </h6>
			<div class="buttonn">
				    <form method="get"  action="{{url('pos')}}">
					   <button type="submit" class="btn btn-outline-primary" style="margin-left: 360px; width:90px; margin-top:50px;">Mapping</button>

		            </form>
				</div>	
			</div>
			
		</div>
		
		
		
		
		
		
		
		
		
		  <div class="moree"> 
		  <div class="divseven">
		    <div>
		      <h3 class="twooheader">Infected Places </h3> 
	           <h2 class="threeeheader">Our <span class="bluecolor">Qualified Team</span> is Ready To Help you For know infected place  </h2>
		          <form method="get"  action="{{url('places')}}">
					   <button type="submit" class="btn btn-outline-primary" style="margin-left: 200px; width:120px; margin-top:10px;">Where go</button>

		            </form>
				  
		    </div>
	        <div>
		      
		     <img class="sevenphoto" src="img\streety.jpg"/>
			  <div class="divgray" >
			    <img class="twop" src="img\download (1).jpg"/>
				<img class="twop" src="img\download (2).jpg"/>
				<img class="twop" src="img\fd0c72b60fc61fb3530e77b83cc86adb.jpg"/>
				<img class="twop" src="img\210b09ce796b0f7aac63c884db26f945.jpg"/>
				</div>
				 
			  
		    </div>
		
		 </div>
		 <div class="divseven">
		   <div class="divblue">
		     <h1 class="precautionary ">precautionary measures</h1>
		   </div>
           		 
		   
		 </div>
		</div>
		
		
		
		
		
		
	
        <div class="divfive">
		  <div>
		    <h1 class="hone">Self Support</h1>
		    <h5 class="pone">Researchers evaluated the health records of 69 million people in the United States, 
		     which included over 62,000 people diagnosed with COVID-19.</h5>
            <h5 class="pone"> Doctors have long suspected that COVID-19 was linked to higher rates of mental health problems.</h5>
			<h4 class="pone" >“COVID-19 can result in psychological issues due to both pandemic stress and the physical effects of the disease,
			<span class="bluecolor">” says Brittany LeMonda,</span> </h4>
			<div class="buttonn">
				    <form method="get"  action="{{url('phys')}}">
					   <button type="submit" class="btn btn-outline-primary" style="margin-left: 200px; width:120px; margin-top:10px;">Self Support</button>

		            </form>
				</div>	
		  </div>
		  
		  
		  
		  <div class="photothree">
		    <div class="divcolor"> 
			  <p class="spacetop">Stress <span class="space" >Hopelessness</span></p>
			  <p class="spacetop">Insomnia<p class="spaceee" >  Obsessive</p></p>
			  <p class="spacetop"> Loneliness<p class="spaceee" >  Anxiety</p></p>
			</div>
		 </div>
		 
		 </div>
		 
		 
		 
		
		 
		 
		 
        <div class="divsix">
		    <div class="fivediv">
			   <img class="photofive" src="img\WhatsApp Image 2021-02-23 at 12.33.49 AM (1).jpeg"/>
			   <h4 class="hh">D/Mohamed Sedky</h4>
			   <p class="pragraphone">pulmonologist 🧠</p>

		    </div>
			 <div class="fivedivred">
			  <img class="photofive" src="img\WhatsApp Image 2021-02-22 at 5.28.35 AM (10).jpeg"/>
			  <h4 class="hh">D/Sherihan Hemida</h4>
			  <p class="pragraphone">Internal 👩‍⚕</p>
		    </div>
			 <div class="fivedivyellow">
			   <img class="photofive" src="img\WhatsApp Image 2021-02-22 at 5.28.35 AM (2).jpeg"/>
			   <h4 class="hh">D/Abdel Aziz El Saadi</h4>
			   <p class="pragraphone">Internal 👩‍⚕</p>
		    </div>
		    <div class="fivedivblack">
			   <h1 class="twoheader">See MOre Doctor</h1>
			   			  <form method="get" action="{{url('doctor')}}">
		  <button type='submit' id='{0}'   class='btn btn-outline-default button_border' data-toggle='modal' 
		  data-target='#exampleModalCenter'><i class='fas fa-caret-right'></i></button>
	   </form>
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>
    <script src="{{ asset('js/app.js') }}" defer></script>

	
</body>
</html>