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
								<li> <button class="btn btn-danger btn-md btn-logins" type="button"><i class="fa fa-user-circle-o"></i>Login</button></li>
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
                        <div class="col-md-3">
                        <div class="circle text-center">
                            <i class="fa fa-archive bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                            </div>
                        <h4 class="h4head">Create Your Package</h4>
                        </div>
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
                        
                          <div class="col-md-3" data-toggle="modal" data-target="#myModal">
                          <div class="circle text-center">
                              <i class="fa fa-headphones bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                              
                              </div>     
                               <h4 class="h4head">Request a Call back</h4>
                         </div>
                        
                            </div>
                            </div>

                      </section>
                      <br><br>
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
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs cus-ul ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab" class="cus-a">
							Travelicious Video </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab" class="cus-a">
							Brand Mentions </a>
						</li>
						
					</ul>
				
				</div>
			</div>
                
                </div>    
                
            
            </div>
        		
        
        
        
        </div>
        <div class="container-fluid">
            
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <div class="col-md-10">
            <div class="tab-content">
						<div class="tab-pane tp1 active" id="tab_default_1">
                            <div class="row">
					<div class="col-md-12">
                        <div class="col-md-7">
                        <iframe width="630" height="315" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen=""></iframe>
                            <p class="para-class"> Pictures of guests at Agra during their trip to India with Travelicious Holiday.</p>
                        
                        </div>
                        <div class="col-md-5 fixed-height">
                        <div class="col-md-12">
                            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            </div>
                        <div class="col-md-12">
                             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            
                            </div>     
                             <div class="col-md-12">
                             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                                 <p>Pictures of guests at Agra during their trip to India with Travelicious Holiday.</p>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            
                            </div>   
                             <div class="col-md-12">
                             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            
                            </div>   
                             <div class="col-md-12">
                             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            
                            </div>   
                             <div class="col-md-12">
                             <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                 <iframe width="225" height="150" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen=""></iframe>
                        
                    </div>
                            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <p class="para">India's golden triangle is a tourist circuit which connects the national capital Delhi, Agra and Jaipur</p>
                  </div>
                            
                            
                            </div>   
                        
                        
                        </div>
                        
                                </div>	
                                <div class="col-md-12">
                                <h3 class="headline-3">Travelicious Holiday</h3>
                                   <p class="pra">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae leo a arcu vehicula hendrerit. Nulla egestas commodo dui sit amet consectetur. Pellentesque facilisis viverra dui in lobortis. Nam mollis, lorem vitae pellentesque placerat, tellus odio tincidunt mauris, eget cursus tortor justo in lectus.</p>
                                   <br>
                                   <br>
                                    <button class="btn btn-danger btn-md btn-logins search-btn pull-right" type="button">View More</button>
                                    
                        
                                </div>	
                            </div>
                            
						</div>
						<div class="tab-pane tp2" id="tab_default_2">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="col-md-6 col-md-blog">
                                <div class="col-md-6 pding">
                                 <h4 class="mrzbtm-0">Blog Headline Goes Here</h4>
                                    <em>04 May, 2017</em>
                                    <p class="pblog">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                                    
                                </div>
                                <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>assets/layouts/images/mjb.png" class="img-responsive img-blog" alt="blog img" title="blog">
                                    
                                </div>
                                
                                </div>
                            <div class="col-md-3">
                                <iframe class="blog-video row-1" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen></iframe>
                                <div class="caption video-headline">
                                <p>Lorem Ipsum</p>
                                <em>4 May, 2017</em>
                                </div>
                                
                                
                                </div>
                                
                                	<div class="col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						
							 <img src="<?php echo base_url(); ?>assets/layouts/images/news1.png" class="img-responsive" alt="blog news " title="blog title">
						
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Loren ipsum dolor</h3>
								<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> More INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
                          
                            
                            </div>
                            
                            <!--second col-12-->
                                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  blsecond">
                       
                            <div class="col-md-3">
                                <iframe class="blog-video blog-videosc" src="https://www.youtube.com/embed/lnBf5_vsk-Q" frameborder="0" allowfullscreen></iframe>
                                <div class="caption video-headline">
                                <p>Lorem Ipsum</p>
                                <em>4 May, 2017</em>
                                </div>
                                
                                
                                </div>
                                               <div class="col-md-6 col-md-blog">
                                <div class="col-md-6 pding">
                                 <h4 class="mrzbtm-0">Blog Headline Goes Here</h4>
                                    <em>04 May, 2017</em>
                                    <p class="pblog">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                                    
                                </div>
                                <div class="col-md-6">
                                <img src="images/mjb.png" class="img-responsive img-blog" alt="blog img" title="blog">
                                    
                                </div>
                                
                                </div>
                                
                                	<div class="col-lg-3">
    				<div class="cuadro_intro_hover second-last-blog" style="background-color:#cccccc;">
						
							 <img src="images/news1.png" class="img-responsive" alt="blog news " title="blog title">
						
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Loren ipsum dolor</h3>
								<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> More INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
                          
                            
                            </div>
                            
                            <!--//end-->
                            
                            
                            </div>    
                            
                            
							
						</div>
					
					</div>
            </div>
                 <div class="col-md-1"></div>
            
            
            
            </div>
            	
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="previw pull-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="next pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                
                </div>
            
            </div>
        
        </div>
        
        
		
	</div>
	<!-- //welcome -->
 <!--for package-->
	<div class="news-letter newslider">
    <div class="container">
  <div class="row ro-margins">
    <h2 class="headlines-offers">Special Offers</h2>
  </div>
  <div class='row ro-margins'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
       
                
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg1.jpg" class="img-responsive img-rounded">
                    <div class="overlay"><h6>Kerala</h6><p>35% of</p></div>
                  </a>
                
              </div>        
           <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg2.jpg" class="img-responsive img-rounded"> <div class="overlay">
                    <h6>Agra</h6><p>Starting from 13000</p></div></a>
                 
              </div>
            <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg3.jpg" class="img-responsive img-rounded">
                   <div class="overlay"> <h6>Rajsthan</h6><p>35% of</p></div>
                  </a>
                 
              </div>
            <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg4.jpg" class="img-responsive img-rounded">
                     <div class="overlay"><h6>Delhi</h6> <p>50% OFF</p></div></a>
                     
              </div> 
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg3.jpg" class="img-responsive img-rounded"></a>
                      <div class="overlay"><h6>Delhi</h6> <p>50% OFF</p></div></a>
              </div>          
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg2.jpg" class="img-responsive img-rounded">  <div class="overlay">
                    <h6>Rajsthan</h6><p>10% off</p></div></a>
                  
              </div>
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg4.jpg" class="img-responsive img-rounded">
                  <div class="overlay"><h6>Agra</h6> <p>Starting from 13000</p></div>
                  </a>
                 
              </div>   
                 <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg1.jpg" class="img-responsive img-rounded">
                     
                     <div class="overlay"><h6>Agra</h6> <p>Starting from 13000</p></div>
                     </a>
                   
              </div>   
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg4.jpg" class="img-responsive img-rounded">
                  <div class="overlay"><h6>Agra</h6> <p>Starting from 13000</p></div>
                  </a>
              </div>          
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg2.jpg" class="img-responsive img-rounded"> <div class="overlay"><h6>Agra</h6><p>Starting from 13000</p></div></a>
                  
              </div>
              <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg4.jpg" class="img-responsive img-rounded">
                  <div class="overlay"><h6>Agra</h6> <p>Starting from 13000</p></div>
                  </a>
              </div> 
                <div class="col-md-3">
                <a class="" href="#"><img alt="" src="<?php echo base_url(); ?>assets/layouts/images/pkg3.jpg" class="img-responsive img-rounded">
                  <div class="overlay"><h6>Agra</h6><p>Starting from 13000</p></div>
                  </a>
              </div> 
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>   
        
    </div>
  </div>
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