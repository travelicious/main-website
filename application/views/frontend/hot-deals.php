<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Hot | Deals | Of | The | Day</title>

      <?php
$this->load->view('frontend/layouts/css_include');
?>

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
      <div class="banner search-bnr">
         <div class="agileinfo-dot cust-high">
            <div class="head">
               <div class="container">
                  <div class="col-md-3">
                     <div class="navbar-brand logo ">
                        <h1 class="animated wow pulse" data-wow-delay=".5s">
                           <a href="index.html"><img src="<?php echo base_url(); ?>assets/layouts/images/logo.png" class="img-responsive custom-img" alt="logo" title="company logo"></a>
                        </h1>
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
                        </div>
                        <!-- /.navbar-collapse -->
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
                        <h3 class="styles-headline">City Name</h3>
                        <div class="row cust-row">
                           <form role="frorm">
                              <div class="col-md-3">
                                 <div class="input-group">
                                    <input type="text" class="form-control cust-form" aria-label="Amount (to the nearest dollar)" placeholder="Country name">
                                    <span class="input-group-addon radius-0"><i class="fa fa-map-marker"></i></span>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="input-group">
                                    <input type="text" class="form-control cust-form" aria-label="Amount (to the nearest dollar)" placeholder="City Name">
                                    <span class="input-group-addon radius-0"><i class="fa fa-map-marker"></i></span>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="input-group">
                                    <input placeholder="When" class="textbox-n form-control cust-form" type="text" onfocus="(this.type='date')" id="date">
                                    <!--<input type="text" class="form-control cust-form" id="datepicker"  placeholder="When">-->
                                    <span class="input-group-addon radius-0"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="input-group ig">
                                    <select class="form-control cust-form">
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
                        <div class="flex-viewport" style="overflow: hidden; position: relative;"></div>
                        <ol class="flex-control-nav flex-control-paging"></ol>
                        <ul class="flex-direction-nav">
                           <li><a class="flex-prev" href="#">Previous</a></li>
                           <li><a class="flex-next" href="#">Next</a></li>
                        </ul>
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
               <div class="col-md-12">
                 
                 <h3 class="hot-deals">Hot Deals</h3>
                 
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
                   <p class="hot-deals-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat.
</p>
    
				   <?php
				     if(!empty($hotPackages))
					 {
					   foreach($hotPackages as $hotPackage)
					   {
                         foreach($hotPackage as $package)
						 {						 
				    ?>
	                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 clo-4mds">
                           <div class="trapezoid"><h4 class="class-headline"><?php echo $package->title; ?></h4>
                             <small><?php echo $package->description; ?></small>
                           </div>
                           <img src="<?php echo base_url(); ?>assets/layouts/images/hd-img.jpg" class="img-responsive hotdeals-imgs img-rounded" alt="hot deals imgs" title="img hot deals">
                        </div>
				   				          
                    <?php
						 } 
					   }					   
					 }
				   ?>
				   
                     
					 <!-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 clo-4mds">
                   <div class="trapezoid">
                        <h4 class="class-headline">Golden Triangle Tour</h4>
                       <small>6 Night/4 Days | Affordable Price</small>
                        
                        </div>
                      <img src="<?php //echo base_url(); ?>assets/layouts/images/hd-img.jpg" class="img-responsive hotdeals-imgs img-rounded" alt="hot deals imgs" title="img hot deals">
                   <div class="triangle-bottomright"></div>
                   </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 clo-4mds">
                   <div class="trapezoid">
                        <h4 class="class-headline">Golden Triangle Tour</h4>
                       <small>6 Night/4 Days | Affordable Price</small>
                        
                        </div>
                      <img src="<?//php echo base_url(); ?>assets/layouts/images/hd-img.jpg" class="img-responsive hotdeals-imgs img-rounded" alt="hot deals imgs" title="img hot deals">
                   <div class="triangle-bottomright"></div>
                   </div> -->
                   
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
            <div class="col-md-6">
               <h1 class="headlins-heart">Spread The <i class="fa fa-heart fa fa-2x c-fa-heat"></i> Tell a Friend</h1>
            </div>
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

  
<?php
 $this->load->view('frontend/layouts/footer');

?>

<?php
 $this->load->view('frontend/layouts/js_include');

?> 
   </body>
</html>