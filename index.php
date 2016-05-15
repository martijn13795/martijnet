<!DOCTYPE HTML>
<html lang="en">
<head>
<!--=============== basic  ===============-->

	<meta charset="UTF-8">
	<title>Martijnet</title>
	<meta name="description" content="Personal website">
	<meta name="keywords" content="Martijn Posthuma, Martijn, Posthuma, Personal information">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<!--=============== css  ===============-->	

	<link type="text/css" rel="stylesheet" href="css/reset.css">
	<link type="text/css" rel="stylesheet" href="css/idangerous.swiper.css">
	<link rel="stylesheet" href="css/superslides.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">

<!--=============== fonts  ===============-->

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>

<!--=============== favicons ===============-->

	<link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>
<!--================= Wrapper start ================-->
<div id="wrapper">


	<div class="container-bg">
		<div class="container-overlay"></div>
		<span class="over-border top-border"></span>
		<span class="over-border bottom-border"></span>
		<span class="over-border left-border"></span>
		<span class="over-border right-border"></span>
	</div>
	
<!--================= Slider start ================-->

	<div id="slides">
	
		<ul class="slides-container">
				
			<!-- Slide 1 -->
				
			<li>		
				<div style="background-image: url('img/bg1.jpg');" class="slides-fullscreen-img"></div>
			</li>
					
			<!-- Slide 2 -->
					
			<li>
				<div style="background-image: url('img/bg2.jpg');" class="slides-fullscreen-img"></div>
			</li>
	
			<!-- Slide 3 -->
					
			<li>	
				<div style="background-image: url('img/bg3.jpg');" class="slides-fullscreen-img"></div>
			</li>
				
		</ul>
					
  	</div><!-- Slider end -->
	
<!--================= Main start ================-->

	<div class="main">

		<div class="swiper-container">
		
			<div class="swiper-wrapper">
			

				<div class="swiper-slide">
				
			 <!--================= About start ================-->
			 
					<div class="container">
										
						<div class="content"> 
	
							<h2>About me</h2>
							<div class="small-separator"></div>                       	
			
							<p class="align-just"> Lorempje ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo eros justo, in pulvinar neque congue eu. Fusce gravida pharetra leo, in consequat sapien bibendum eleifend. Duis suscipit purus at mollis varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<p class="align-just">Ut eu nisl ut purus sodales suscipit sit amet non elit. Pellentesque viverra fringilla purus ut pretium. Morbi sit amet nunc sed nibh lobortis posuere condimentum nec urna. Praesent tincidunt dictum porttitor. Cras et purus sed ipsum ullamcorper tristique.</p>
								
							<!--social-links -->
								
							<div class="social-links">
								<ul>
									<li><a href="#" target="_blank"  class="transition"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
									<li><a href="#" target="_blank" class="transition"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
									<li><a href="#" target="_blank" class="transition"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
								</ul>
							</div>
			
						</div><!--About end-->
						<a class="navigation arrow-right back-left transition" href="#"><i class="fa fa-chevron-right"></i></a>  
					</div>
					
				</div>
				


				<div class="swiper-slide"> 
				
				<!--============= Countdown start =============-->	
				      	          
					<div class="container">
						
						<div class="content fistslide transition bc"> 
						
						<div class="fade transition">  
						<span class="rotade rot-top-left"></span>
						<span class="rotade rot-top-right"></span>
						<span class="rotade rot-bottom-left"></span>
						<span class="rotade rot-bottom-right"></span>  
							<img src="img/logo.png" alt=""> 
							 
								<ul class="countdown">
									<li>
										<span class="days rot">00</span>
										<p class="days_ref">days</p>			
									</li>
									<li>
										<span class="hours rot">00</span>
										<p class="hours_ref">hours</p>
									</li>
									<li>
										<span class="minutes rot2">00</span>
										<p class="minutes_ref">minutes</p>
							
									</li>
									<li>
										<span class="seconds rot2">00</span>
										<p class="seconds_ref">seconds</p>
									</li>
								</ul>
									
			
							<h3>MY WEBSITE IS COMING SOON</h3>
 
						</div> 
						             
						<div class="clear"></div>
							
						<div class="show-progress isDown transition">
							<i class="fa fa-chevron-down fa-2x"></i>
						</div>
							
						</div> 
						              
						<a class="navigation arrow-left about-link transition" href="#"><i class="fa fa-info fa-1x"></i></a> 
						<a class="navigation arrow-right contact-link transition" href="#"><i class="fa fa-envelope-o fa-1x"></i></a> 

						<div class="progress-holder">
						
							<div class="progress">
							 
							<input data-bgcolor="#ccc"  data-readonly=true type="text" data-width="250" data-skin="tron" data-fgcolor="#fff" data-thickness=".07" data-angleoffset="180" class="num num2" name="65" value="0">
							<span class="percent">%</span>
							
							</div>
							
							<h3>NOTIFY ME WHEN IT'S READY</h3> 
							
							<div class="subcribe">

								<span class="overlay suboverlay"></span>
								<fieldset>
									<form class="subscriptionForm" method="post">
										<input id="subscriptionForm" class="inputForm" type="text" value="Enter Your Email Address" onFocus="if (this.value=='Enter Your Email Address') this.value=''" onBlur="if (this.value==''){this.value='Enter Your Email Address'}" />
										<input type="submit" id="submitButton" class="transition" value="Send">
									</form>
									
									<div id="success">Thanks for your subscription</div>
									<div id="error">Please enter a valid email address</div>
									
								</fieldset>
								
							</div>
							 
						</div> 
						
					</div> <!-- Countdown end --> 
					   
				</div>
				

				<div class="swiper-slide">
				
				<!--============== Contact start ================-->
							
					<div class="container">

						<div class="content fade2 transition">
						
							<h2>Get in touch</h2> 
							<div class="small-separator"></div>
					
							
							<p class="align-just" style="text-align:center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo eros justo, in pulvinar neque congue eu. Fusce gravida pharetra leo, in consequat sapien bibendum eleifend. </p> 
							
							<div class="contact-info">
							
								<div class="grid-2 transition">
									<i class="fa fa-mobile fa-2x"></i>
									<br><br> +1 (000) 123456 
								</div>	
								
								<div class="grid-2 transition lanch-form">
									<i class="fa fa-envelope-o fa-2x"></i> 
									<br><br>yourmail@yuormail.com
								</div>
								
								<div class="grid-2 transition">
									<i class="fa fa-globe fa-2x"></i>
									<br><br><a href="#" target="_blank">Heritage Park Minneapolis</a> 
								</div>
							</div>			
						</div>
						
						<!--contact form -->
						
						<div class="contact-form clear">
							<div class="close-form transition"><i class="fa fa-times"></i></div>
							<fieldset id="contact_form">
																		
										
								<div class="grid-half">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
										
								<div class="grid-half">
									<label for="email">Email</label>
									<input type="text" name="email" id="email"  class="right" />
								</div>
										
								<label for="message" class="m-top">Message</label>
								<textarea name="message"  id="message" ></textarea>
										
								<div class="clear"></div>
																	
								<label>
									<button class="submit_btn transition" id="submit_btn"><i class="fa fa-envelope-o fa-2x"></i> </button>
								</label>
								<div id="result"></div>
								
							</fieldset>
								
						</div>
						
						<a class="navigation arrow-left back-right transition" href="#"><i class="fa fa-chevron-left"></i></a> 
						
					</div><!--Contact end -->  
					      
				</div>
				

			</div> 
			
		</div>
		
	</div><!-- Main end -->
	
</div><!-- Wrapper end -->

<!--=============== javascript ===============-->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jpreloader.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/idangerous.swiper-2.0.min.js"></script>
	<script type="text/javascript" src="js/superslides.js"></script>
	<script type="text/javascript" src="js/county.js"></script>
	<script type="text/javascript" src="js/jquery.knob.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
	
</body>
</html>