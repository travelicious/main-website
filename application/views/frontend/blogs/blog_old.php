<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelicious Holiday</title>
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
						<li><a href="http://localhost/main-website/frontend/blog">Recent Post</a></li>
						<li><a href="">Submit Post</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
                </ul>
            </div>
       
       </div>   
        
    </div> 
    </div>
   
	<div class="banner blog-bnn">
		<div class="agileinfo-dot blog-bnr-height">
        <div class="banner-slider">
            <div class="container">
            <section class="slider">
						<div class="flexslider">
                <div class="col-md-12">
                            
                    <div class="col-md-4 ">
                    
                    <h4 class="txt-bnr">Travelicious Holidays, which is presently known as Travelicious Holiday, is one of the premier travel and tourism companies in India.</h4>
  <button class="btn btns-mor">Read More</button>                    
                    </div>
                    <div class="col-md-4">
                     <h4 class="txt-bnr">Travelicious Holidays, which is presently known as Travelicious Holiday, is one of the premier travel and tourism companies in India.</h4>
  <button class="btn btns-mor">Read More</button>
                    
                    </div>
                    <div class="col-md-4">
                     <h4 class="txt-bnr">Travelicious Holidays, which is presently known as Travelicious Holiday, is one of the premier travel and tourism companies in India.</h4>
  <button class="btn btns-mor">Read More</button>
                    
                    </div>
                    
                            </div>            
                            
                            
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
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">
           
                <h2 class="blog-headling">Trending</h2>

       




                     
        
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

                   
            
            

                      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                   
                      <div class="col-md-12 blog-home-ing bdr-block">
                      <a href="blog/single_blog?id=<?php echo $row->id; ?>"><img src="<?php echo base_url().'assets/uploads/images/'.$row->image; ?>" class="img-responsive img-news bdr-block" alt="blog" title="blog"></a>

               

                      <div class="caption img-news">
                      <h3 class="justifyclass blog-cus"><?php echo $title ?></h3>
                        <em class="cem"><?php echo $created_at ?></em><em class="text-right"><?php echo $author ?></em> 
                        <p class="justifyclass blog-cus"><?php echo substr($description,0,200); ?><a href="">Read More..>></a></p>
                    </div>
                    </div><br>
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
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-default btn-readmor"> Read More</button>
                    <br>
                      <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                </div>
            
            
            </div>
           
            </div>
          
        
       
       <div class="clearfix"></div>
        
        
		
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
						<li><a href="http://localhost/main-website/frontend/about_us">About Us </a> </li>
						<li><a href="#">Contact Us </a></li>
                        <li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund and Cancellation Policy</a></li>
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
					<a href="https://www.facebook.com/bootsnipp" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp" target="_blank"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page" target="_blank"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com" target="_blank"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
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