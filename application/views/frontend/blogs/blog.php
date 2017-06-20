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
    <div class="container-fluid bg-custom container-height" >
   <div class="row">
    <div class="col-md-3">
       <img src="<?php echo base_url(); ?>assets/layouts/images/logo.png" class="img-responsive logos" alt="logo" title="logo title">
       </div>
      <div class="col-md-1 col-1">  <span>Blog</span></div>
    <div class="col-md-5">
         
                <div class="input-group custom-search-form">
              <input type="text" class="form-control height travinput-search">
              <span class="input-group-btn">
              <button class="btn btn-primary custom-search" type="button">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
             </div>  
       
       </div>   
        <div class="col-md-3">
            	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown">
					<a href="#" class="dropdown-toggle custogle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars iclass" aria-hidden="true"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Top Blog</a></li>
						<li><a href="#">Latest Blog</a></li>
						<li><a href="#">Submit Blog</a></li>
                        <li><a href="#">Author</a></li>
					</ul>
				</li>
                </ul>
            </div>
       
       </div>   
        
    </div> 
    </div>
   
	<div class="banner banner single-blog-bnn">
		<div class="agileinfo-dot single-blog-bnr-height ">
        <div class="banner-slider">
            <div class="container">
            <section class="slider">
						<div class="flexslider">
                
                            
                </div>
                </section>
                
            </div>
            </div>
        
        </div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome wlcomnew" id="welcome">
        <div class="container-fluid margin-top-container">
     <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
         <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
             <!--first blog-->



                           <?php
                            
                          if($fetch_data->num_rows() >0)
                          {
                      foreach($fetch_data->result() as $row)
                          {

                          ?>
<?php
                         $url=$row->url;

                         $title=$row->title;

                         $image=$row->image;

                         $description=$row->description;

                         $author=$row->author;

                         $created_at=$row->created_at;
                        

?>




                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      
             <h6 class="h6-class">Kerala Tour</h6>
             
        <h3 class="blog-headline-3"><?php echo $title ?></h3>
                    
                <small class="sml"><?php echo $created_at ?></small>    
                    <div class="clearfix"></div>

                    <a href="<?php echo base_url();?>frontend/blog/single_blog?id=<?php echo $row->id;?>"><img src="<?php echo base_url().'assets/uploads/images/'.$row->image; ?>" class="img-responsive blog-img" alt="img-blog" title="blog images title"> </a>
                    <div class="caption">

                    <p class="sng-blog"><?php echo substr($description,0,400); ?></p>
                    
                    </div>
                    
               </div>
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col12-zindex">
              <div class="col-md-6 col-lg-6 col-sm-1`2 col-xs-12 mrg-pad">
                 <div class="btn-group border-radius-group">
    <button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-facebook" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-twitter" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
    <button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-youtube" aria-hidden="true"></i></button>
  </div>
                 </div>
                 <a href="<?php echo base_url();?>frontend/blog/single_blog?id=<?php echo $row->id;?>">
                 <div class="col-md-6 col-lg-6 col-sm-1`2 col-xs-12 pull-right text-right mrg-pad"> <button class="btn btn-danger border-radius-group">Continue Reading</button></div></a>
             

     



             </div>
             <hr class="blog-hr-brds">


           
                          <?php


                         }
                           }
                         else
                           {
                            ?>
<?php

}

        ?>

                <!--// end first blog-->
        
                </div>
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-4-blog">



            
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12-b-n">
             <div class="input-group inpt-grp-blog-n">
                <div class="input-group-btn search-panel">
                    
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control inptfield-n" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default srch-blog-n" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>            
                </div>
            
                
                </div> 

            <!--recent blog post-->







             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12-b-n">
             <button type="button" class="btn btn-danger btn-block withImageAndIcon btn-blog-new">
		    	
		    	Recent Blog POst
    		</button>

 <?php
                            
                          if($latest_blog_data->num_rows() >0)
                          {
                      foreach($latest_blog_data->result() as $row)
                          {

                          ?>

                      <?php
                        
                         $url=$row->url;

                         $title=$row->title;

                         $image=$row->image;

                         $description=$row->description;

                         $author=$row->author;

                         $created_at= $row->created_at;
                        

                        ?>
                 
                 <div class="dovimg">
                 <h6><?php echo $created_at ?> </h6>
                <img src="<?php echo base_url().'assets/uploads/images/'.$image ?>" class="img-responsive img-right" alt="" title="">
                 <div class="caption"><?php echo $title ?></div>


                 
                    <div class="clearfix"></div>


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




              <!--// end recent blog post-->
            <!--recent blog post-->
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12-b-n">
             <button type="button" class="btn btn-danger btn-block withImageAndIcon btn-blog-new">
		    	
		    	Recent Comment
    		</button>
                 
                <ul class="ul-class">
                 
                 <li>Lorem ipsum text goes here for comment recent comment.</li>
                    <li class="seperator"></li>
                 <li>Lorem ipsum text goes here for comment recent comment.</li>
                    <li class="seperator"></li>
                 <li>Lorem ipsum text goes here for comment recent comment.</li>

        
                 
                 </ul>
                 
                 
                 
                 
                
                </div> 
              <!--// end recent blog post-->
            <!--follow us-->
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12-b-n">
             <button type="button" class="btn btn-danger btn-block withImageAndIcon btn-blog-new">
		    	
		    	Follow US
    		</button>
                 
                  <ul class="social-network social-circle">

                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>

                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>	
                 
                 
                 
                 
                
                </div> 
              <!--// end recent blog post-->
             <!--subscribe now-->




             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12-b-n">
                  <form id="loginForm" method="POST" action="/login/" novalidate="novalidate"  class="forms-sub">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Enter User Name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Email Id</label>
                                  <input type="email" class="form-control" id="emailId" name="email" value="" required="" title="Please enter your Email id">
                                  <span class="help-block"></span>
                              </div>
                      <br/> 
                       <button type="button" class="btn btn-danger btn-block withImageAndIcon btn-blog-new">
		    	Subscribe Now
    		</button>
                 </form>
            
                 
                 
                 
                 
                 
                 
                
                </div> 
              <!--// end recent blog post-->
              
         
         
         
         </div>
            
            </div>   
     
            
<div class="clearfix"></div>
     
     
          
        
        </div>
      
        
        
		
	</div>
	<!-- //welcome -->
 
    <!-- news-letter -->
	
	<!-- //news-letter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 agile-footer-grid">
					<h4>Contact Us</h4>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> C-18, Achraya Niketan,Mayur Vihar, Phass-1, Delhi-110091</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i> 9818565002  </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>Jyoti@traveliciousholiday.com</p>
                     <p><i class="fa fa-envelope" aria-hidden="true"></i>info@traveliciousholiday.com</p>
				</div>
				<div class="col-md-3 agile-footer-grid mid">
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
				<div class="col-md-3 agile-footer-grid dm">
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
                <div class="col-md-3 agile-footer-grid">
					<h4>Social Link</h4>
					<div class="popular-grids">
					<a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</p>
					</div>
					<!--<div class="popular-grids">
						<p>24x7 Dedicated Customer Support</p>
						<div class="clearfix"> </div>
					</div>-->
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
	<script src="js/owl.carousel.js"></script>
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