
<!DOCTYPE html>
<html lang="en">
<head>
<title>Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- bootstrap-css -->
<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" type="text/css">
<!--// css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css" type="text/css" media="all">
<link href="<?php echo base_url(); ?>assets/frontend/css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/cm-overlay.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font.css" />
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://www.myfonts.com/fonts/linotype/rage-italic/" rel="stylesheet">    

<!-- //font -->
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js"></script>
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
       <div class="col-md-3">
       <img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" class="img-responsive logos" alt="logo" title="logo title">
       </div>
    <div class="col-md-3">
       
       </div>
    <div class="col-md-6">
       <p class="paras"><span class="c-span"><i class="fa fa-envelope" aria-hidden="true"></i>info@traveliciousholidays.com</span><span class="c-span"><i class="fa fa-phone"></i> +91-9818565002</span></p>
       
       </div>   
        
    </div> 
    </div>
   
    <div class="banner news-bnr">
        <div class="agileinfo-dot">
        <div class="banner-slider new-news">
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
        <div class="container-fluid wlc cont-fluid updates">
        
            <div class="row">
                  <div class="col-md-12">
                      
                <ul class="breadcrumb short brd"><li><a href="#">Home</a></li><li class="active">Search Result</li></ul>
                       
                
                </div>
                          
            </div>
                
        
        
        
        </div>
  <div class="container-fluid">
        <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">

        <!-- <div class="panel panel-body pbody">
          <img src="<?php echo base_url(); ?>assets/frontend/images/news-left.jpg" class="img-responsive img-rounded" alt="" title=""> 
             <div class="caption">
             <h4>This is News Headline1</h4>
                 <p class="new-para-news">ce the 1500s, when an unknown printer took a galley of 
type and scram bled it to make a type specimen booLore
m Ipsum is simply dummy text of the printing and typese
tting industry. Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s, when an unkno
wn printer </p>
                 <a href="#" class="text-danger">Read More</a>
             </div>
        </div>  -->  
          
           <div class="panel panel-body pbody">
               <h3 class="h3-news1">Top <mark>News</mark></h3>
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mrgbt">
               <img src="<?php echo base_url(); ?>assets/frontend/images/news-left.jpg" class="img-responsive img-rounded" alt="" title=""> 
             <div class="caption">
             <h4>This is News Headline</h4>
                 <p class="new-para-news">ce the 1500s, when an unknown printer took a galley of 
type and scram bled it to make a type specimen booLore
m Ipsum is simply dummy text of the printing and typese
tting industry. Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s, when an unkno
wn printer </p>
                 <a href="#" class="text-danger">Read More</a>
                 
             </div>
               
               </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mrgbt">
               <img src="<?php echo base_url(); ?>assets/frontend/images/news-left.jpg" class="img-responsive img-rounded" alt="" title=""> 
             <div class="caption">
             <h4>This is News Headline</h4>
                 <p class="new-para-news">ce the 1500s, when an unknown printer took a galley of 
type and scram bled it to make a type specimen booLore
m Ipsum is simply dummy text of the printing and typese
tting industry. Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s, when an unkno
wn printer.Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s, when an unkno
wn printer.Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s.
                 
                 </p>
                 <a href="#" class="text-danger">Read More</a>
             </div>
               </div>
          </div>   
            </div>

<!-- __________  Center News ____________ -->

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <h3 class="h3-news">Latest <mark>News</mark> </h3>

                <?php
               foreach ($front_fetch_data->result() as $row) {
                ?>

             <div class="panel panel-body pbody" >
                 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                 <a href="news/single_news?id=<?php echo $row->id; ?>">
                 <img src="<?php echo base_url(); ?>assets/images/news/<?php echo $row->image; ?>" class="img-responsive img-rounded" alt="" tilte="" style="height: 89px;">
                     <div class="caption">
                     <h4 style="text-align: center;"><?php echo $row->title; ?></h4></a>
                     </div>
                 </div>
                 <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                 <p>Place :<b>City name</b></p>
                 <p>Date :<b><?php echo $row->created_at; ?></b></p>
                     <p class="new-para-news"> <?php echo substr($row->description,0,100); ?>  </p>
                     <a href="news/single_news?id=<?php echo $row->id; ?>" class="text-right text-danger readmore">Read More</a>
                 
                 </div>
                 
                </div>

                <?php } ?>

<!-- _______________________________ Center News end  _______________________________ -->


<!-- _______________________________ Right Sidebar News  _______________________________ -->
                
                <div class="col-md-12 col-lg-12 col-sm-12 more-news-section">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <buton class="btn btn-default dflt"><i class="fa fa-plus-circle" aria-hidden="true"></i> More News</buton>
                    
                    </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                
                </div>
            
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <h3 class="h3-news2">Most <mark>Visited</mark> News </h3>

                <?php
                foreach ($front_right_data->result() as $row3) { 
                ?>


             <div class="panel panel-body pbody">
                 <p class="right-side ">
                 <a href="news/single_news?id=<?php echo $row3->id; ?>">
                 <img src="<?php echo base_url(); ?>assets/images/news/<?php echo $row3->image; ?>" class="img-responsive img-rounded" alt="" tilte="" style="height: 59px; width: 79px; display: inline-block;"><br>
                 <span><?php echo $row3->title; ?></span></a>
                 <?php echo substr($row->description,0,50); ?>

                     <span>..........</span>
                     <a href="news/single_news?id=<?php echo $row3->id; ?>" class="text-right text-danger">Read More</a>
                     </p>
                 <div class="clearfix"></div>
                 
                 
                </div>
                
                <?php } ?>

 <!-- _______________________________ Center News end  _______________________________ -->               
            
            </div>
      
      </div>
        
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
    <script src="<?php echo base_url(); ?>assets/frontend/js/jarallax.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/easing.js"></script>
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
    <script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.js"></script>
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