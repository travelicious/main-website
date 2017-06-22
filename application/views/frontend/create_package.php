<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- bootstrap-css -->
<link href="<?php echo base_url(); ?>assets/layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/font-awesome.css" type="text/css">
<!--// css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>assets/layouts/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/owl.carousel.css" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/layouts/css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/cm-overlay.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/font.css" />
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://www.myfonts.com/fonts/linotype/rage-italic/" rel="stylesheet">    

<!-- //font -->
<script src="<?php echo base_url(); ?>assets/layouts/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layouts/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
    <div class="container-fluid bg-custom">
   <div class="row">
    <div class="col-md-6">
       
       </div>
    <div class="col-md-6">
       <p class="paras"><span class="c-span"><i class="fa fa-envelope" aria-hidden="true"></i>info@traveliciousholidays.com</span><span class="c-span"><i class="fa fa-phone"></i> +91-9818565002</span></p>
       
       </div>   
        
    </div> 
    </div>
   
	<div class="banner cbnr">
		<div class="agileinfo-dot">
			<div class="head">
				<div class="container">
                    <div class="col-md-3">
                     <div class="navbar-brand logo ">
									<h1 class="animated wow pulse" data-wow-delay=".5s">
									<a href="index.html"><img src="<?php echo base_url(); ?>assets/layouts/images/logo.png" class="img-responsive custom-img" alt="logo" title="company logo"></a></h1>
								</div>
                    </div>
                    <div class="col-md-9">
                    
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
                
			
					<div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" >
							<ul>
								<li><a href="<?php echo base_url();?>frontend/login"> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>Login</button></li></a>
							 <li><a href="<?php echo base_url();?>frontend/signup"> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>Signup</button></li></a>
							</ul>
						</div>
                        </div>
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div class="banner-slider">
				<div class="container slidbnr">
					<section class="slider">
						<div class="flexslider">
				<div class="row cust-row">
                <form role="frorm">
                    <div class="col-md-3">
                    <div class="input-group">
  
  <input type="text" class="form-control cust-form" aria-label="Amount (to the nearest dollar)" placeholder="Wher are you Going">
  <span class="input-group-addon radius-0"><i class="fa fa-map-marker"></i></span>
</div>
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
  
  <input type="text" class="form-control cust-form" aria-label="Amount (to the nearest dollar)" placeholder="from">
  <span class="input-group-addon radius-0"><i class="fa fa-map-marker"></i></span>
</div>
                    
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
   <input placeholder="When" class="textbox-n form-control cust-form" type="text" onfocus="(this.type='date')"  id="date">
  <!--<input type="text" class="form-control cust-form" id="datepicker"  placeholder="When">-->
  <span class="input-group-addon radius-0"><i class="fa fa-calendar" aria-hidden="true"></i></span>
</div>
                    
                    </div>
                    <div class="col-md-3">
                      <div class="input-group ig">
  
                          <select class="form-control cust-form" >
                          <option value="0">Guest</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                          
                          </select>
  
</div>
                    </div>
              
                    <div class="col-md-2">
                   <button class="btn btn-danger btn-md btn-logins search-btn" type="button">Search</button>
                    
                    </div>
                    
                    
                    </form>                
                            
                            </div>			
                            
						</div>
					</section>
                <!--for circle-->    
           
                    <!--end-->
					<!-- flexSlider -->
						<script defer src="<?php echo base_url(); ?>assets/layouts/js/jquery.flexslider.js"></script>
						<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
					<!-- //flexSlider -->
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome bkgs" id="welcome">
        <div class="container-fluid wlc cont-fluid">
        <h2 class="creatpackgheadline">Create Your Package</h2> 
        
        </div>
        <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6 creatpkg-frm">
            	  <div role="form"  >
    <div class="col-lg-12">
     <div class="col-md-6">
         <div class="form-group">
        <label for="InputName">From </label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Source point" required>
          <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span></div>
      </div>
        
        </div>
        <div class="col-md-6 ">
         <div class="form-group">
        <label for="InputName">When</label>
        <div class="input-group">
          <input placeholder="When" class=" form-control " type="text" onfocus="(this.type='date')"  id="dateinpt">
          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
      </div>
        
        </div>
        <hr class="hrpkg">
        <div class="col-md-12">
        
         <div class="form-group">
        <label for="InputName">Where to go</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
          <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span></div>
      </div>
        
        
        </div>
       <hr class="hrpkg">
        <p class="para-pkg">Select Number of room and guest</p>
        <div class="col-md-4">
         <div class="form-group ">
        <label for="InputName">Room</label>
        <div class="input-group">
           <select class="form-control">
		            <option value="" selected disabled>Select Room </option>
		            <option value="0">1</option>
		            <option value="1">2</option>
		        </select>
             
             </div>
      </div>
            </div>
            <div class="col-md-4">
             <div class="form-group">
        <label for="InputName"> Adults (12+ yrs)</label>
        <div class="input-group">
          <select class="form-control ">
		            <option value="" selected disabled>Select Room </option>
		            <option value="0">1</option>
		            <option value="1">2</option>
		        </select>
                 </div>
      </div>
                </div>
            <div class="col-md-4">
             <div class="form-group">
        <label for="InputName"> Children (0-11 yrs)</label>
        <div class="input-group">
           <select class="form-control">
		            <option value="" selected disabled>Select Room </option>
		            <option value="0">1</option>
		            <option value="1">2</option>
		        </select>
                 
                 </div>
      </div>
            </div>
        
        
       <hr class="hrpkg">
        <div class="col-md-12"></div>
     <div class="col-md-12 text-right" >
         <input type="submit" name="submit" id="submit" value="Get Package" class="btn  btn-danger pktgsbtn ">
        
        </div>
     
     
    </div>
  </div>

            
            
            </div>
            <div class="col-md-3"></div>
            
            </div>
        
        </div>
       	
	</div>
	<!-- //welcome -->


	<!-- //feedback -->
	<!-- news-letter -->
	<div class="news-letter nwzltr">
		<div class="col-md-12">
       <div class="col-md-3"></div>
            <div class="col-md-6"><h1 class="headlins-heart">Spread The <i class="fa fa-heart fa fa-2x c-fa-heat"></i> Tell a Friend</h1></div>
            <div class="col-md-3"></div>
        </div>
        <div class="clearfix"></div>
	</div>
	<!-- //news-letter -->
    <!-- news-letter -->
	<div class="news-letter tftr">
		<div class="col-md-12">
       <div class="col-md-4"></div>
            <div class="col-md-4 col4">
            <i class="fa fa-facebook-square fa fa-5x" aria-hidden="true"></i><i class="fa fa-twitter-square fa fa-5x" aria-hidden="true"></i><i class="fa fa-google-plus-square fa fa-5x" aria-hidden="true"></i><i class="fa fa-pinterest-square fa fa-5x" aria-hidden="true"></i>
            </div>
            <div class="col-md-4"></div>
        </div>
         <div class="clearfix"></div>
	</div>
   
	<!-- //news-letter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Contact Us</h4>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> C-18, Achraya Niketan,Mayur Vihar, Phass-1, Delhi-110091</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i> 9818565002  </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>Jyoti@traveliciousholiday.com</p>
                     <p><i class="fa fa-envelope" aria-hidden="true"></i>info@traveliciousholiday.com</p>
				</div>
				<div class="col-md-4 agile-footer-grid mid">
					<h4>Quick Links</h4>
					<ul class="w3agile_footer_grid_list">
						<li><a href="<?php echo base_url() ?>frontend/about_us">About Us </a> </li>
						<li><a href="#">Contact Us </a></li>
                        <li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Term & Condation</a></li>
                        <li><a href="#">Refund and cancllation policy</a></li>
						<li><a href="#">Testimonial</a></li>
					</ul>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Have Question</h4>
					<div class="popular-grids">
						<p>info@traveliciousholiday.com
</p>
					</div>
					<div class="popular-grids">
						<p>24x7 Dedicated Customer Support</p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
            <div class="col-md-7">
            <p>© 2017  Travelicious Holiday. All rights reserved | Design by <a href="#">traveliciousholidays.com</a></p>
            </div>
            <div class="col-md-5 ftr5">
            <i class="fa fa-cc-visa fa fa-2x" aria-hidden="true"></i><i class="fa fa-cc-mastercard fa fa-2x" aria-hidden="true"></i><i class="fa fa-cc-amex fa fa-2x" aria-hidden="true"></i> <i class="fa fa-cc-paypal fa fa-2x" aria-hidden="true"></i><i class="fa fa-credit-card fa fa-2x" aria-hidden="true"></i>
            
            </div>
			
		</div>
	</div>
	<!-- //footer -->
	<script src="<?php echo base_url(); ?>assets/layouts/js/jarallax.js"></script>
	<script src="<?php echo base_url(); ?>assets/layouts/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/layouts/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/layouts/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="<?php echo base_url(); ?>assets/layouts/js/owl.carousel.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
    $(document).ready(function(){
        $('.next').click(function(){
       $('.tp2').show();
        $('ul li a#tab_default_2').addClass(active); 
        $('ul li a#tab_default_1').removeClass(active);     
            
            
        });
        $('.previw').click(function(){
       $('.tp1').show();
        $('ul li a#tab_default_1').addClass(active); 
        $('ul li a#tab_default_2').removeClass(active);     
            
            
        });
        
    });
    
    $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: 300,
  });
});
    
    </script>    
    
</body>	
</html>