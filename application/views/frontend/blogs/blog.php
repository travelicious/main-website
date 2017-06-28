<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>

<?php
$this->load->view('frontend/layouts/css_include');
?>


</head>
<body>
  <!-- banner -->
    <div class="container-fluid bg-custom container-height" >
   <div class="row">
    <div class="col-md-3">
       <img src="<?php echo base_url(); ?>assets/layouts/images/logo.png" class="img-responsive logos" alt="logo" title="logo title">
       </div>
      <div class="col-md-1 col-1">  <span>News</span></div>
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
            <li><a href="#">Top News</a></li>
            <li><a href="#">Latest News</a></li>
            <li><a href="#">Submit News</a></li>
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
     <br><br>
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
             
        <h3 class="blog-headline-3"><?php echo $title ?></h3>
                    
                <small class="sml"><?php echo $created_at ?></small>    
                    <div class="clearfix"></div>

        <a href="<?php echo base_url("frontend/blog/single_blog").'/'.$url;?>"><img src="<?php echo base_url().'assets/uploads/images/'.$row->image; ?>" class="img-responsive img-news bdr-block" alt="blog" title="blog"></a>
                    <div class="caption">
                    <p class="sng-blog"><?php echo substr($description,0,400); ?> </p>
                    
                    </div>
                    
               </div>
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col12-zindex">
              <div class="col-md-6 col-lg-6 col-sm-1`2 col-xs-12 mrg-pad text-left">
                 <div class="btn-group border-radius-group">

 

<a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://www.facebook.com')"><button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-facebook" aria-hidden="true"></i></button></a>

    <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com')"><button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>

    <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://plus.google.com')"><button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-google-plus" aria-hidden="true"></i></button></a>

   <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://youtube.com')"><button type="button" class="btn btn-danger border-radius-group"><i class="fa fa-youtube" aria-hidden="true"></i></button></a>

  </div>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-1`2 col-xs-12 pull-right text-right mrg-pad"><a href="<?php echo base_url("frontend/blog/single_blog").'/'.$url;?>"> <button class="btn btn-danger border-radius-group">Continue Reading</button></a></div>


             
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

       
                <!--//first blog-->
  
                </div>

<!-- ________________________ Alamgir leftsidebar __________________ -->

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

                         $created_at= $row->created_at;
                        

                        ?>
                 



                 <div class="dovimg">
                 <h5><?php echo $created_at ?></h5>
                  <a href="<?php echo base_url("frontend/blog/single_blog").'/'.$url;?>"><img src="<?php echo base_url().'assets/uploads/images/'.$row->image; ?>" class="img-responsive img-right" alt="" title=""></a>
                 <div class="caption"><?php echo substr($description,0,200); ?></div>
                 
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


 <?php
                            
                          if($comment_blog1->num_rows() >0)
                          {
                      foreach($comment_blog1->result() as $row)
                          {

                          ?>

                      <?php


             $comment=$row->comment;

                        ?>
                 
                 
                <ul class="ul-class">
                 
                 <li><?php echo $comment ?>
                    <li class="seperator"></li>
                    </li>
             
               
                 </ul>
                 
                 
                 
                 
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
          Subscribe Now &nbsp; <i class="fa fa-check-square-o" aria-hidden="true"></i>
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
 
  
<?php
 $this->load->view('frontend/layouts/footer');

?>

<?php
 $this->load->view('frontend/layouts/js_include');

?>
    
</body> 
</html>