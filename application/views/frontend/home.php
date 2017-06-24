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
									<a href="<?php echo base_url(); ?>frontend/home"><img src="<?php echo base_url(); ?>assets/layouts/images/logo.png" class="img-responsive custom-img" alt="logo" title="company logo"></a></h1>
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
                                <li class="dropdown">
									
									<a href="codes.html" class="dropdown-toggle userlogin" data-hover="Pages" data-toggle="dropdown" aria-expanded="false"><span class="spn">Hello ! Guest</span> <img src="<?php echo base_url(); ?>assets/layouts/images/user.jpg" class="img-responsive img-circle imgs" alt="loged user " title="user icon"> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#"> <i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>
                                       <hr class="hr-custom">
										<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                         <hr class="hr-custom">
                                        <li><a href="#"><i class="fa fa-recycle" aria-hidden="true"></i> Activities</a></li>
                                        <hr class="hr-custom">
                                        <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Other Info</a></li>
									</ul>
							  </li>
								<!--<li> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>Login</button></li>
								<li class="signup">Sign up</li>-->
								
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
                    <section class="m-t">
                        <div class="row">
                    <div class="col-md-12">
                    <a href="<?php echo base_url(); ?>frontend/create_package">
                        <div class="col-md-3">
                        <div class="circle text-center">
                            <i class="fa fa-archive bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                            </div>
                        <h4 class="h4head">Create Your Package</h4>
                        </div></a>
                          <div class="col-md-3">
                        <div class="circle text-center">
                              <i class="fa fa-handshake-o bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                              </div>   
                              <h4 class="h4head htd">HOT
DEALS of Day's</h4>
                        </div>
                          <div class="col-md-3">
                        <div class="circle text-center">
                              <i class="fa fa-hourglass-end bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                              </div>
                              <h4 class="h4head">Last Minitus Deals</h4>
                         </div>
                        
                          <div class="col-md-3">
                        <div class="circle text-center">
                              <i class="fa fa-headphones bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                              
                              </div>     
                                  <h4 class="h4head">Request a Call back</h4>
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
	<!-- welcome -->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="w3-welcome-heading">
				<h3>Brand <mark>Mentions</mark></h3>
                <hr class="indx-hr">
			</div>
			<div class="w3l-welcome-info">
                <div class="row">
                
				<div class="col-sm-6 welcome-grids brnd-mntion">
                    <div class=" ">
                    <div class="col-md-7">
                    <h2 class="ind-brnd-h2">Lorum Ipsum Doller</h2>
                        <em class="brnds-dates">04 May, 2017</em>
                        <p class="txt-dis-brnd">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text... <a href="#"><em>Read More >></em></a></p>
                    
                    </div>
                    <div class="col-md-5">
                  
						<img src="<?php echo base_url(); ?>assets/layouts/images/mjb.jpg" class="img-responsive zoom-img" alt="">
				
                    
                    </div>
					</div>
				</div>
				<div class="col-sm-3 welcome-grids padding-0-brnd ">
					
						<iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
					
				</div>
                <div class="col-sm-3 welcome-grids padding-0-brnd">
					
						<img src="<?php echo base_url(); ?>assets/layouts/images/modi-aus-mit.jpg" class="img-responsive zoom-img imgs-brnd" alt="">
                    <div class="caption brnd-imgs-mention">
                    <h3>Lorem Ipsume Doller goes</h3>
                        <em>04 May, 2017</em>
                        
                        
                    </div>
					
				</div>
            </div>
                <div class="row brnd-row">
                
				
				<div class="col-sm-3 welcome-grids padding-0-brnd ">
					
						<iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
					
				</div>
                    <div class="col-sm-6 welcome-grids brnd-mntions">
                    <div class=" ">
                         <div class="col-md-2 rowsecond-cls">
                  
						<h4>MAY 2017</h4>
				
                    
                    </div>
                    <div class="col-md-10">
                    <h2 class="ind-brnd-h2s">Lorum Ipsum Doller</h2>
                             <p class="txt-dis-brnd">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text... <a href="#"><em>Read More >></em></a></p>
                    
                    </div>
                   
					</div>
				</div>
                <div class="col-sm-3 welcome-grids padding-0-brnd">
					
						<img src="<?php echo base_url(); ?>assets/layouts/images/modi-aus-mit.jpg" class="img-responsive zoom-img imgs-brnd" alt="">
                    <div class="caption brnd-imgs-mention">
                    <h3>Lorem Ipsume Doller goes</h3>
                        <em>04 May, 2017</em>
                        
                        
                    </div>
					
				</div>
            </div>
                        <div class="row brnd-rows">
                
				
				<div class="col-sm-4 welcome-grids padding-0-brnd ">
					
						<iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
					
				</div>
                    <div class="col-sm-4 welcome-grids padding-0-brnd">
                        <div class=" ">
                         <div class="col-md-5 col-5">
                  
						<img src="<?php echo base_url(); ?>assets/layouts/images/right-img-r3.jpg" class="img-responsive img-third-brnds" alt=" blog quotes" title="person say img">
				
                    
                    </div>
                    <div class="col-md-7 commenmt-brnd">
                    <h2 class="ind-brnd-h2s">Lorum Ipsum Doller</h2>
                             <p class="txt-dis-brnd">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text... <a href="#"><em>Read More >></em></a></p>
                    
                    </div>
                   
					</div>
                   
				</div>
                <div class="col-sm-4 welcome-grids padding-0-brnd">
					
						<img src="<?php echo base_url(); ?>assets/layouts/images/modi-aus-mit.jpg" class="img-responsive zoom-img imgs-brnd" alt="">
                    <div class="caption brnd-imgs-mention">
                    <h3>Lorem Ipsume Doller goes</h3>
                        <em>04 May, 2017</em>
                        
                        
                    </div>
					
				</div>
            </div>
			
                <div class="clearfix"> </div>
			</div>
            
			
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div id="services" class="services cuservice">
		<div class="container">  
			<div class="w3-welcome-heading">
				<h3>Our <mark>Packages</mark></h3>




                <hr class="indx-hr">
                                           <?php
                            
                          if($package_fetch->num_rows() >0)
                          {
                      foreach($package_fetch->result() as $row)
                          {

                          ?>
                           <?php



                         $url=$row->url;

                        // $image=$row->image;

                         $title=$row->title;

                         $duration=$row->duration;

                         //$destination=$row->destination;


                         $description=$row->description;

                      

                         
                     

?>
			</div>



			<div class="services-w3ls-row">
				<div class="col-md-4 col-sm-4 col-xs-6 services-grid agileits-w3layouts">
                    <div class="box-shadow-index">
					<!--<span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>-->
                    <img src="<?php echo base_url(); ?>assets/layouts/images/best-pkges-img.jpg" class="img-responsive zoom-img ind-our-packages" alt="img" title="img title">
                    <div class="caption packages-index">
                    <h4 class="headlines-indx"><?php echo $title ?></h4>
                    <p><b>Duration :4 Night, 3 Days</b></p> 
                    <p><b>Destination : Delhi - Agra - Jaipur - Delhi</b></p> 
					<p><?php echo $description ?></p>  
                    <div class="panel-footer">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 rating-str"><label><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label></div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
                        <button class="btn btn-danger btn-txt-dtl">Details</button>
                        </div>



                        <div class="clearfix"> </div>

                        </div>


                        
                        </div>  



                    </div>
                    
					
				</div>


                          <?php


                         }
                           }
                         else
                           {
                            ?>
<?php

}

        ?> 
			
		
			</div>  
		</div>
	</div>
    </div>
	<!-- //services -->
	<!-- feedback -->
	<div class="feedback_dot cfdot">
		<div class="feedback fdb">
			<div class="container">
				<div class="w3-welcome-heading">
					<h3 class="fed-headline-h3">Get In <mark>Touch</mark></h3>
                     <hr class="indx-hr">
				</div>
				<div class="agileits-feedback-grids">
			    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <h4 class="contact-form"> <i class="fa fa-map-marker" aria-hidden="true"></i> Head Office Delhi</h4>    
                    <address>
                    <p class="cpr-indx">Address : C-18, Acharya Niketan, Mayur Vihar Phase-1, 110096</p>
                    </address>
                    
                    </div>  
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                      <h4 class="contact-form"><i class="fa fa-phone" aria-hidden="true"></i>  Contact No.</h4>    
                  
                    <p class="cpr-indx">+91-9818565002</p>
                  
                    
                    
                    </div>  
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <h4 class="contact-form"><i class="fa fa-envelope" aria-hidden="true"></i> Email ID</h4>    
                    <address>
                    <p class="cpr-indx">jyoto@traveliciousholidays.com</p>
                    <p class="cpr-indx">info@traveliciousholidays.com</p>
                    </address>
                    
                    </div>  
                 <!--<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    
                     <h4><i class="fa fa-map-marker" aria-hidden="true"></i>  Regional Office Address</h4>    
                    <address>
                    <p>jyoto@traveliciousholidays.com</p>
                    <p>info@traveliciousholidays.com</p>
                    </address>
                    
                    </div>   -->   
                    
                    </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    	<form>
					<div class="col-md-12 ">
			  			<div class="form-group">
			  				<label for="exampleInputUsername" class="lb-indx">Your name</label>
					    	<input type="text" class="form-control inp-indx" id="" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail" class="lb-indx">Email Address</label>
					    	<input type="email" class="form-control inp-indx" id="exampleInputEmail" placeholder=" Enter Email id">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone" class="lb-indx">Mobile No.</label>
					    	<input type="tel" class="form-control inp-indx" id="telephone" placeholder=" Enter 10-digit mobile no.">
			  			</div>
                        <div class="form-group">
			  				<label for ="description" class="lb-indx"> Message</label>
			  			 	<textarea  class="form-control inp-indx" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
                        <button type="button" class="btn btn-default btn-danger submit btn-block send-msg-indx">  Send Message</button>
			  		</div>
			  		
				</form>
                    
                    
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->
    <!-- services -->
	<div id="services1" class="services cuservice">
		<div class="container">  
			<div class="w3-welcome-heading">
				<h3>Best <mark>Packages</mark></h3>
                <hr class="indx-hr">
			</div>
			<div class="services-w3ls-row">
				<div class="col-md-4 col-sm-4 col-xs-6 services-grid agileits-w3layouts">
                    <div class="box-shadow-index">
					<!--<span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>-->
                    <img src="<?php echo base_url(); ?>assets/layouts/images/best-pkges-img.jpg" class="img-responsive zoom-img ind-our-packages" alt="img" title="img title">
                    <div class="caption packages-index">
                    <h4 class="headlines-indx">Lorem ipsum</h4>
                    <p><b>Duration :4 Night, 3 Days</b></p> 
                    <p><b>Destination : Delhi - Agra - Jaipur - Delhi</b></p> 
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>  
                    <div class="panel-footer">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 rating-str"><label><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label></div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
                        <button class="btn btn-danger btn-txt-dtl">Details</button>
                        </div>
                        <div class="clearfix"> </div>
                        </div>
                        
                        </div>    
                    </div>
                    
					
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 services-grid agileits-w3layouts">
                    <div class="box-shadow-index">
					<!--<span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>-->
					 <img src="<?php echo base_url(); ?>assets/layouts/images/best-pkges-img.jpg" class="img-responsive zoom-img ind-our-packages" alt="img" title="img title">
                    <div class="caption packages-index">
                    <h4 class="headlines-indx">Lorem ipsum</h4>
                    <p><b>Duration :4 Night, 3 Days</b></p> 
                    <p><b>Destination : Delhi - Agra - Jaipur - Delhi</b></p> 
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>  
                    <div class="panel-footer">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 rating-str"><label><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></label></div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
                        <button class="btn btn-danger btn-txt-dtl">Details</button>
                        </div>
                        <div class="clearfix"> </div>
                        </div>
                        </div>    
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 services-grid agileits-w3layouts">
                    <div class="box-shadow-index">
					<!--<span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>-->
					<img src="<?php echo base_url(); ?>assets/layouts/images/best-pkges-img.jpg" class="img-responsive zoom-img ind-our-packages" alt="img" title="img title">
                     <div class="caption packages-index">
                    <h4 class="headlines-indx">Lorem ipsum</h4>
                    <p><b>Duration :4 Night, 3 Days</b></p> 
                    <p><b>Destination : Delhi - Agra - Jaipur - Delhi</b></p> 
					<p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>  
                    <div class="panel-footer">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 rating-str"><label><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></label></div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 text-right">
                        <button class="btn btn-danger btn-txt-dtl">Details</button>
                        </div>
                        <div class="clearfix"> </div>
                         </div>
                        </div>    
                    </div>
				
				<div class="clearfix"> </div>
			</div>  
		</div>

	</div>
    </div>
	<!-- //services -->
	
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
                    
                    <div class="col-md-12 social-icons-l">
                        <div class="fbs"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                         <div class="twt"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                         <div class="g-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                         <div class="priterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></div>
           
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