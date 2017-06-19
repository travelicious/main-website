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
   
	<div class="banner about-bnr">
		<div class="agileinfo-dot cust-high">
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
								<li><a href="<?php echo base_url(); ?>frontend/login"> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>
								Login</button></li></a>


								<li class="signup">Sign up</li>
								
							</ul>
						</div>
                        </div>
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div class="banner-slider">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
				
                            
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
	<div class="welcome" id="welcome">
        <div class="container-fluid wlc cont-fluid">
        
            <div class="row row-height">
            <div class="col-md-7">
                <ul  class="breadcrumb"><li><a href="#">Home</a></li><li class="active">About US</li></ul>
                
                </div>
            <div class="col-md-5">
                <div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs cus-ul ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab" class="cus-a">
				 Company Profile </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab" class="cus-a">
							Our Team </a>
						</li>
						
					</ul>
				
				</div>
			</div>
                
                </div>    
                
            
            </div>
        		
        
        
        
        </div>
       
        <div class="clearfix"></div>
        
		
	</div>
	<!-- //welcome -->
 <!--for package-->
	<div class="news-letter newslider">
    <div class="container-fluid">
        
        <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            
                        <div class="tab-content">
						<div class="tab-pane tp1 active" id="tab_default_1">
                      <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                          <h3 class="about-headline">Introduction</h3>
                          <p class="about-pr">Travelicious Holidays, which is presently known as Travelicious Holiday, is one of the premier travel and tourism companies in India designed to make every individual addicted to traveling and exploring new places of the world. Amidst the humdrum of life today, it often becomes tough for the common people to carry on without getting a proper break from the busy schedules. This is the reason every single person looks forward to managing some holidays from their hectic work so that the same can be utilized for going to distant lands for feasting the eyes as well as the soul. There is no better way to make the most of the holidays than traveling! And with Travelicious Holidays handy as the perfect travel partner, traveling is sure to become one of the most memorable experiences of life.</p>
                          
                          </div>
                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                          <h3 class="about-headline">Packages in India Travelicious Holidays Private Limited</h3>
                              <p class="about-pr">Travel is synonymous with rest and revival of own self by discovering an unknown land, meeting different people and indulging in some of the most celestial pleasures of life, which otherwise is not at possible in today’s tough life. There is hardly anyone present in this world who does not love to travel as ‘Wanderlust’ is quite a universal phenomenon. Quite evidently, there are several occasions that come in life when traveling becomes too much necessary to bounce back to life with fresh zeal and vigor. However, it often becomes too cumbersome for one to make immediate arrangements so that traveling happens smoothly</p>
                          
                          </div>
                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                           <h3 class="about-headline">Places galore to explore with Travelicious Holidays!</h3>
                              <p class="about-pr">At Travelicious Holidays, there are numerous tourism packages catering to any and every kind of traveling requirement of the tourists and to any corner of the world. In fact, packages are available for almost all places of India and the world in several forms in order to make sure that people with all types of budgets can enjoy within their reasonable means as well. Travelicious Holidays keeps in mind the fact traveling ought not to be constrained due to price factor and hence, personalized package facility is very much present here. </p>
                          
                          
                          </div>
                          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                          <h3 class="about-headline">How Travelicious Holidays stands out!
</h3>
                          <p class="about-pr">Given the kind of travel and tourism services that the people are provided with, it can easily be said that Travelicious Holidays is simply the best one to go with because of several reasons. Some of the most outstanding features of Travelicious Holidays that make this the topmost tourism and travel services are:</p>

                              <p class="about-pr">The illustrative itinerary is given by Travelicious Holidays to anyone who registers for a package that contains everything in detail so that one does not face any problem during the course of stay and travel in a certain destination.<br>

    The packages are flexible enough and it is not necessary that anyone should strictly follow only the mentioned scheduled packages only. Travelicious Holidays believes that traveling should be pleasant and full of freedom and hence, it gives optimum independence to the travelers to personalize the packages as per their ease and convenience.<br>

Booking in Travelicious Holidays is absolutely simple and can be done online with the help of a very user-friendly interface.
</p>
                          </div>
                            
                            
                            </div>
                            
						</div>
						<div class="tab-pane tp2" id="tab_default_2">
                   <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                          <div class="col-md-5 col-lg-5 col-sm-12  col-xs-12">
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>assets/layouts/images/team-one.jpg" class="img-responsve img-circle img-usr" alt="team img" title="team one">
                              
                              </div>
                              <div class="col-md-6">
                               <p class="primg">Alamgir</p>
                                  <p class="degi">Delhi</p>
                              </div>
                       
                              
                          </div>
                          <div class="col-md-7 col-lg-7 col-sm-12  col-xs-12">
                          <p class="tem-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo quat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur Excepteur si occaecat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed  eiusmod temp or incididunt ut labore dolore magna aliqua. enim  minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                              
                          </div>
                          
                       </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                             <div class="col-md-7 col-lg-7 col-sm-12  col-xs-12">
                          <p class="tem-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo quat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur Excepteur si occaecat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed  eiusmod temp or incididunt ut labore dolore magna aliqua. enim  minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                              
                          </div>
                          <div class="col-md-5 col-lg-5 col-sm-12  col-xs-12">
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>assets/layouts/images/team-two.jpg" class="img-responsve img-circle img-usr" alt="team img" title="team one">
                              
                              </div>
                              <div class="col-md-6">
                               <p class="primg">Gaurav Rajput</p>
                                  <p class="degi">Degination Name</p>
                              </div>
                       
                              
                          </div>
                         
                          
                       </div>
                            </div>
                            
							
						</div>
					
					</div>
            
            
            </div>
        
        
        </div>
        <div class="clearfix"></div>
        </div>
    
    </div>
	<!--//end-->
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
						<li><a href="#">About Us </a> </li>
						<li><a href="#">Contact Us </a></li>
                        <li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Refund and Cancellation Policy</a></li>
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
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog diologs">
    
      <!-- Modal content-->
      <div class="modal-content cust-content">
        <div class="modal-header bb">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <div class="col-md-12">
            <div class="circle1">
             <i class="fa fa-headphones fa fa-5x" aria-hidden="true"></i>            
             
             </div>
             <hr>
            
            </div>
        </div>
        <div class="modal-body">
         <form>
            <div class="col-md-6">
             
             <div class="form-group">
        <label for="InputName">Name </label>
        <div class="input-group">
          <input type="text" class="form-control fcf" name="InputName" id="InputName" placeholder="Enter Source point" required="">
          <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span></div>
      </div>
             </div>
             <div class="col-md-6">
             
             <div class="form-group">
        <label for="InputName">City </label>
        <div class="input-group">
          <input type="text" class="form-control fcf"  name="InputName" id="InputName" placeholder="Enter Source point" required="">
          <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span></div>
      </div>
             </div>
             <div class="col-md-6">
             
             <div class="form-group">
        <label for="InputName">Contact No. </label>
        <div class="input-group">
          <input type="text" class="form-control fcf" name="InputName" id="InputName" placeholder="Enter Source point" required="">
          <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span></div>
      </div>
             </div>
             <div class="col-md-6">
             
             <div class="form-group">
        <label for="InputName">Email Id </label>
        <div class="input-group">
          <input type="text" class="form-control fcf" name="InputName" id="InputName" placeholder="Enter Source point" required="">
          <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span></div>
      </div>
             </div>
            
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="modal-footer bt">
            <div class="col-md-4"></div>
            <div class="col-md-4">
             <button type="button" class="btn btn-danger btn-lg btn-requ" data-toggle="modal" data-target="#myModal1" ><i class="fa fa-phone" aria-hidden="true"></i> Request A Call</button>
            </div>
            <div class="col-md-4"></div>
            <div class="clearfix"></div>
            <br>
            
         
        </div>
      </div>
      
    </div>
  </div>
    	<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog diologs">
    
      <!-- Modal content-->
      <div class="modal-content cust-content">
        <div class="modal-header bb">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <div class="col-md-12">
            <div class="circle2">
            <i class="fa fa-check fa fa-5x" aria-hidden="true"></i>          
             
             </div>
            
            
            </div>
        </div>
        <div class="modal-body text-hdr">
            <h3 class="thankyoubox">Thank You</h3>
            <p class="prs">Your request has been successfully submitted</p>
        
            <div class="clearfix"></div>
        </div>
        <div class="modal-footer bt">
                      
         
        </div>
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
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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