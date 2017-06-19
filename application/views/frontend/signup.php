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
                                <!--<li class="dropdown">
									
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
                                <li><span class="span-create">Don't Have Account ? Create Now ! </span><button class="btn btn-danger btn-md btn-logins registra-btn" type="button"><a href="<?php echo base_url(); ?>frontend/signup"<i class="fa fa-pencil" aria-hidden="true"></i>Register</button></li></a>
								<!--<li> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>Login</button></li>
								<li class="signup">Sign up</li>-->
								
							</ul>
						</div>
                        </div>
					  <div class="clearfix"></div>	
				</div>
			</div>
			<div class="banner-slider">
			
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome custom-welcom" id="welcome">
   <div class="container">
   
	<div class="col-lg-12">
	<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8  well cus-wel">

        <form action="" method="post">
					<div class="col-sm-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <form>
                            <h3 class="headline3">Create Your Account</h3>
						 <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>		
                             <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>	
                             <div class="row">
							<div class="col-sm-12 form-group cl">
								<label>Mobile Number</label>
                                 <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+ 91 <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#+10">+10</a></li>
            <li role="separator" class="divider"></li>
          <li><a href="#+11">+11</a></li>
            <li role="separator" class="divider"></li>
          <li><a href="#+92">+92</a></li>
          
        </ul>
      </div><!-- /btn-group -->
      <input type="number" class="form-control" aria-label="..." required="">
    </div>
								<!--<input type="text" placeholder="Enter First Name Here.." class="form-control">-->
							</div>
							
						</div>	
                            <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>	
                             <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Confirm Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>	
                             <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>	
                            <div class="row">
							<div class="col-sm-12 ">
                                	<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="" />
								</div>
							</div>
						</div>
                                
								
							</div>
							
						</div>	
							
						
										
					
					<div class="form-group">
						<div class="checkbox checkbox-danger">
                        <input id="checkbox6" type="checkbox" checked>
                        <label for="checkbox6">
                          Please Send Me Email 
                        </label>
                    </div>
					</div>
					<input type="submit" name="" class="btn btn-md btn-danger btn-style" value="Register">


					<!-- <button type="button" class="btn btn-md btn-danger btn-style"><i class="fa fa-pencil" aria-hidden="true"></i> Register</button>	 -->
					</form>	
                          <hr class="hrsign" />  
                            <div class="or"><h5>OR</h5></div>
                            <div class="row mzrtrs">
							
                                <div class="col-sm-12 form-group">
								<div class="col-md-2"></div>
                                <div class="col-md-8">  <a class="btn btn-block btn-social btn-facebook btn-block btn-dem">
        <i class="fa fa-facebook"></i> Sign in with Facebook
      </a></div>
                                <div class="col-md-2"></div>
							</div>
                                <div class="col-sm-12 form-group">
								<div class="col-md-2"></div>
                                <div class="col-md-8"> <a class="btn btn-block btn-social btn-twitter btn-block btn-dem">
        <i class="fa fa-twitter"></i> Sign in with Twitter
      </a></div>
                                <div class="col-md-2"></div>
							</div>
                                <div class="col-sm-12 form-group">
								<div class="col-md-2"></div>
                                <div class="col-md-8"> <a class="btn btn-block btn-social btn-google-plus btn-block btn-dem">
        <i class="fa fa-google-plus"></i> Sign in with Google
      </a></div>
                                <div class="col-md-2"></div>
							</div>
							
						</div>	
					</div>
                       
                        </div>
                    <div class="col-md-2"></div>
				</form> 
        
        </div>
        <div class="col-md-2"></div>
				
				</div>
	</div>
	</div>
       
	</div>
	<!-- //welcome -->

	<!--//end-->
	<!-- //feedback -->
	
    <!-- news-letter -->
	
	<!-- footer -->
	
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