<!DOCTYPE html>
<html lang="en">
<head>
<title>Packeges</title>

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

  
<?php
 $this->load->view('frontend/layouts/footer');

?>

<?php
 $this->load->view('frontend/layouts/js_include');

?>   
    
</body>	
</html>