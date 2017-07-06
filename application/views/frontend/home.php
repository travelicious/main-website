<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Page</title>
<!-- font- family link here -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" media="all and (orientation:portrait)"
 href="portrait.css">
<!--  for mozilla firefox font awesome link use  -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


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
                                    <form role="frorm" action="<?php echo base_url("frontend/home/searched_package");?>" method="post">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                               
                                                <select class="form-control cust-form" aria-label="Amount (to the nearest dollar)" name="dest_name">
                                                     <option value="">---Where are you Going---</option>

      <?php foreach ($dest_list as $value) { ?>
        <option value="<?php echo $value->id; ?>"><?php echo $value->title; ?></option>
                  <?php } ?>
            </select>
                                              
                                                    
                                            
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
    <input placeholder="When" class="textbox-n form-control cust-form" type="text" onfocus="(this.type = 'date')"  id="date">
                                              
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

                                        <div class="col-md-2 search-button">
                                            <button class="btn btn-danger btn-md btn-logins search-btn search-button1" type="submit">Search</button>

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
                        <div class="col-md-3 for-mozilla-width for-mozilla-use">
                        <div class="circle text-center">
                            <i class="fa fa-archive bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                            </div>
                      <h4 class="h4head">Create Your Package</h4>
                        </div>
                        </a>
                        <a href="<?php echo base_url(); ?>frontend/home/hotDealsOfADay">

                          <div class="col-md-3 for-mozilla-width-right">
                        <div class="circle text-center">
                              <i class="fa fa-handshake-o bgicon" aria-hidden="true"></i>

                             
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                              </div>   
                              <h4 class="h4head htd">HOT
DEALS of Day's</h4>       
                        </div>
                        
                        </a>
                          <div class="col-md-3 for-mozilla-width">
                        <div class="circle text-center">
                              <i class="fa fa-hourglass-3 [&#xf253;] bgicon" aria-hidden="true"></i>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                              </div>
                              <h4 class="h4head">Last Minitus Deals</h4>
                         </div>
                        
                          <div class="col-md-3 for-mozilla-width-right">
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
			 <div class="welcome for-mozilla" id="welcome">
    <div class="container">
      <div class="w3-welcome-heading">
        <h3>Brand <mark>Mentions</mark></h3>
                <hr class="indx-hr">
      </div>
      <div class="w3l-welcome-info">
                <div class="row">


                      <?php
                            $arrayN = array();
                         foreach ($fetch_news->result_array() as $rowN) {
                                
                            $arrayN[] = $rowN;
                            }
                      ?>
                      <?php
                            $arrayB = array();
                         foreach ($fetch_blog->result_array() as $rowB) {
                                
                            $arrayB[] = $rowB;
                            }
                      ?>
                
        <div class="col-sm-6 welcome-grids brnd-mntion">
                    <div class=" ">
                    <div class="col-md-7">
                    <h2 class="ind-brnd-h2"><?php echo $arrayN[0]['title']; ?></h2>
                        <em class="brnds-dates"><?php echo $arrayN[0]['created_at']; ?></em>
                        <p class="txt-dis-brnd"><?php echo $arrayN[0]['description']; ?>... <a href="<?php echo base_url("frontend/news/single_news").'/'.$arrayN[0]['url']; ?>"><em>Read More >></em></a></p>
                    </div>
                    <div class="col-md-5">
                  
            <img width="200" src="<?php echo base_url(); ?>assets/images/news/<?php echo $arrayN[0]['image']; ?>" class="img-responsive zoom-img" alt="">
                    </div>
          </div>
        </div>
        
        <a href="<?php echo base_url("frontend/blog/single_blog").'/'.$arrayB[0]['url'];?>">
        <div class="col-sm-3 welcome-grids padding-0-brnd">
                <img src="<?php echo base_url(); ?>assets/uploads/images/<?php  echo $arrayB[0]['image'];?>" class="img-responsive zoom-img imgs-brnd" alt="">
                <div class="caption brnd-imgs-mention">
                <h3><?php echo $arrayB[0]['title']; ?></h3>
                    <em><?php echo $arrayB[0]['created_at']; ?></em> 
                </div>
        </div></a>


        <div class="col-sm-3 welcome-grids padding-0-brnd ">
          
            <iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
        </div>

            </div>
    <div class="row brnd-row">
                
        
        <div class="col-sm-3 welcome-grids padding-0-brnd ">
          
            <iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
          
        </div>
        <div class="col-sm-6 welcome-grids brnd-mntion">
                    <div class=" ">
                    <div class="col-md-7">
                    <h2 class="ind-brnd-h2"><?php echo $arrayN[1]['title']; ?></h2>
                        <em class="brnds-dates"><?php echo $arrayN[1]['created_at']; ?></em>
                        <p class="txt-dis-brnd"><?php echo $arrayN[1]['description']; ?>... <a href="<?php echo base_url("frontend/news/single_news").'/'.$arrayN[1]['url']; ?>"><em>Read More >></em></a></p>
                    </div>
                    <div class="col-md-5">
                  
            <img width="200" src="<?php echo base_url(); ?>assets/images/news/<?php echo $arrayN[1]['image']; ?>" class="img-responsive zoom-img" alt="">
                    </div>
          </div>
        </div>

        <a href="<?php echo base_url("frontend/blog/single_blog").'/'.$arrayB[1]['url'];?>">
        <div class="col-sm-3 welcome-grids padding-0-brnd">
            <img src="<?php echo base_url(); ?>assets/uploads/images/<?php  echo $arrayB[1]['image'];?>" class="img-responsive zoom-img imgs-brnd" alt="">
                    <div class="caption brnd-imgs-mention">
                    <h3><?php echo $arrayB[1]['title']; ?></h3>
                        <em><?php echo $arrayB[1]['created_at']; ?></em>
                    </div>
        </div></a>
  </div>
                        

                        <div class="row brnd-rows">
        <div class="col-sm-3 welcome-grids padding-0-brnd ">
            <iframe class="ifrm-vdo-brnd" src="https://www.youtube.com/embed/0zpvZOiqvLY" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <a href="<?php echo base_url("frontend/blog/single_blog").'/'.$arrayB[2]['url'];?>">
        <div class="col-sm-3 welcome-grids padding-0-brnd">
            <img src="<?php echo base_url(); ?>assets/uploads/images/<?php  echo $arrayB[2]['image'];?>" class="img-responsive zoom-img imgs-brnd" alt="">
                    <div class="caption brnd-imgs-mention">
                    <h3><?php echo $arrayB[2]['title']; ?></h3>
                        <em><?php echo $arrayB[2]['created_at']; ?></em>
                    </div>
        </div></a>
        
        <div class="col-sm-6 welcome-grids brnd-mntion">
                    <div class=" ">
                    <div class="col-md-7">
                    <h2 class="ind-brnd-h2"><?php echo $arrayN[2]['title']; ?></h2>
                        <em class="brnds-dates"><?php echo $arrayN[2]['created_at']; ?></em>
                        <p class="txt-dis-brnd"><?php echo $arrayN[2]['description']; ?>... <a href="<?php echo base_url("frontend/news/single_news").'/'.$arrayN[2]['url']; ?>"><em>Read More >></em></a></p>
                    </div>
                    <div class="col-md-5">
                  
            <img width="200" src="<?php echo base_url();?>assets/images/news/<?php echo $arrayN[2]['image']; ?>" class="img-responsive zoom-img" alt="">
                    </div>
          </div>
        </div>
  </div>
      

                <div class="clearfix"> </div>
      </div>
            
      
    </div>
  </div>
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
			
       <div class="clearfix"> </div>
		
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

    <!--   this is left section which comment -->
			    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <!--   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
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
                   
                    </div> -->
                    
                    </div>
                   <!--  get in touch left part comment -->
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    	<form>
					<div class="col-md-12 ">
			  			<div class="form-group form-box">
			  				<label for="exampleInputUsername" class="lb-indx">Your name</label>
					    	<input type="text" class="form-control inp-indx" id="" placeholder=" Enter Name" required="true">
				  		</div>
				  		<div class="form-group form-box">
					    	<label for="exampleInputEmail" class="lb-indx">Email Address</label>
					    	<input type="email" class="form-control inp-indx" id="exampleInputEmail" placeholder=" Enter Email id" required="true">
					  	</div>	
					  	<div class="form-group form-box">
					    	<label for="telephone" class="lb-indx">Mobile No.</label>
					    	<input type="tel" class="form-control inp-indx" id="telephone" placeholder=" Enter 10-digit mobile no." required="true">
			  			</div>
                        <div class="form-group form-box">
			  				<label for ="description" class="lb-indx"> Message</label>
			  			 	<textarea  class="form-control inp-indx" id="description" placeholder="Enter Your Message" required="true"></textarea>
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
	
<?php
 $this->load->view('frontend/layouts/footer');
?>
     
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
                              <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="InputName">City </label>
                           <div class="input-group">
                              <input type="text" class="form-control fcf"  name="InputName" id="InputName" placeholder="Enter Source point" required="">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="InputName">Contact No. </label>
                           <div class="input-group">
                              <input type="text" class="form-control fcf" name="InputName" id="InputName" placeholder="Enter Source point" required="">
                              <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="InputName">Email Id </label>
                           <div class="input-group">
                              <input type="text" class="form-control fcf" name="InputName" id="InputName" placeholder="Enter Source point" required="">
                              <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           </div>
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

<?php
 $this->load->view('frontend/layouts/js_include');

?>






	<!-- //footer -->
	

    
</body>	
</html>