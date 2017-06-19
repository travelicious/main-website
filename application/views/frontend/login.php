<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
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
   
	<div class="banner">
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
                               <!--  <li class="dropdown">
									
									<a href="codes.html" class="dropdown-toggle userlogin" data-hover="Pages" data-toggle="dropdown" aria-expanded="false"><span class="spn">Hello ! Guest</span> <img src="images/user.jpg" class="img-responsive img-circle imgs" alt="loged user " title="user icon"> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#"> <i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>
                                       <hr class="hr-custom">
										<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                         <hr class="hr-custom">
                                        <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i> Activities</a></li>
                                        <hr class="hr-custom">
                                        <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Other Info</a></li>
									</ul>
							  </li>-->
								<li><span class="span-create">Don't Have Account ? Create Now ! </span><button class="btn btn-danger btn-md btn-logins registra-btn" type="button">
                <a href="<?php echo base_url(); ?>frontend/signup"><i class="fa fa-pencil" aria-hidden="true"></i>Register</button></li></a>
								<!--<li class="signup">Sign up</li>-->
								
							</ul>
						</div>
                        </div>
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div class="banner-slider">
            
				<div class="container ctrl">
					<section class="slider">
						<div class="flexslider">
				         <div class="row">
                            <div class="col-md-12">
                             <div class="col-md-2"></div>
                                <div class="col-md-8">
                                <div class="panel panel-default pnlc">
                                    <div class="panel-body panel-cls">
                                <div class="row">
                                        <form>
                                        <div class="col-md-6">
                                            <div class="cs6or"><hr class="cshr"><div id="circle"><h6>OR</h6></div></div>
                                                   <fieldset>
            <div class="row">
              <h4 class="loginheadline">Login With Us  </h4>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label class="customlabel">Username / Email :</label>
                  <div class="input-group ig"> <span class="input-group-addon inp"> <i class="glyphicon glyphicon-user"></i> </span>
                    <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                 <label class="customlabel">Password:</label>
                  <div class="input-group ig"> <span class="input-group-addon inp"> <i class="glyphicon glyphicon-lock"></i> </span>
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                </div>
               
                <div class="form-group">
                    <div class="row">
                <div class="col-md-2"></div> 	<div class="col-md-8"><a href="#" class="btn btn-primary btn-danger loginanchor"><span class="fa fa-sign-in"></span> Login</a>
                        <p><a href="">Forgotten Password ? </a></p>
                       
                        </div>
                    <div class="col-md-2"></div>
                        </div>
                     <div class="clearfix"></div>
                </div>              
              
              </div>
            </div>
           
          </fieldset>  
                                            
                                            </div>
                                           
                                          <div class="col-md-6 social-icfield">
                                            <h4 class="socialheadline">Login With</h4>
                                              <p class="socialpr">
                                               <a href="http://facebook.com" class="btn btn-social-icon btn-facebook btn-lg">
                                                           <i class="fa fa-facebook"></i></a>                                               
                                               <a class="btn btn-social-icon btn-twitter btn-lg"><i class="fa fa-twitter"></i></a>
                                               <a class="btn btn-social-icon btn-linkedin btn-lg"><i class="fa fa-linkedin "></i></a>
                                            </p>
                                              <a href="#" class="btn btn-danger bths">Take tour of your account</a>
                                            </div>  
                                              <div class="clearfix"></div>
                                        </form>
                                        </div>
                                           
                                    </div>
                                    <div class="panel-footer cusftr">
                                    <div class="row">
                                        <p class="txt-why">Why Login</p>
                                        <div class="col-md-3 col3rigth">
                                        <div class="col-md-3">
                                            <i class="fa fa-wpforms fa fa-3x text-white" aria-hidden="true"></i>
                                            </div> 
                                            <div class="col-md-9"><h5 class="custh5">Book Faster</h5></div>
                                        
                                        </div>
                                        <div class="col-md-3 col3rigth">
                                                <div class="col-md-3">
                                           <i class="fa fa-cog fa fa-3x text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-9">
                                            <h5 class="custh5">Manage Bookin</h5>
                                            </div>                            
                                        
                                        </div>
                                        <div class="col-md-3 col3rigth">
                                                                            
                                        <div class="col-md-3">
                                           <i class="fa fa-clock-o fa fa-3x text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-9">
                                            <h5 class="custh5">Check History</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="col-md-3">
                                          <i class="fa fa-print fa fa-3x text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-9">
                                            <h5 class="custh5">Prient E-ticket</h5>
                                            
                                            </div>                                  
                                        
                                        </div>
                                    
                                    </div>
                                    
                                    </div>
                                
                                
                                </div>
                                <div class="col-md-2"></div>
                             
                             
                             </div>
                            
                            </div>
                            
						</div>
					</section>
         
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
	
   
	<!-- //news-letter -->
	<!-- footer -->
	<!--<div class="footer">
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
	</div>-->
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