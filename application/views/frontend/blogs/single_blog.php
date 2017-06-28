<!DOCTYPE html>
<html lang="en">
<head>
<title>Single | Blog</title>

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
   
	<div class="banner banner blog-bnn">
		<div class="agileinfo-dot blog-bnr-height ">
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

<!-- welcome -->
  <div class="welcome wlcomnew" id="welcome">
        <div class="container-fluid margin-top-container">
     <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
         <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">

               <?php
                            
                          if($single_blog_data->num_rows() >0)
                          {
                      foreach($single_blog_data->result() as $row1)
                          {

                          ?>
<?php
                         $url=$row1->url;

                         $title=$row1->title;

                         $image=$row1->image;

                         $description=$row1->description;

                         $author=$row1->author;

                         $created_at= $row1->created_at;
                        

?>

             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      
      <br><br>
             
        <h3 class="blog-headline-3"><?php echo $title ?></h3>
                    
              
                    <div class="clearfix"></div>

                    <img src="<?php echo base_url().'assets/uploads/images/'.$image; ?>" class="img-responsive blog-img" alt="img-blog" title="blog images title"> </a>
                    <div class="caption">

                    <p class="sng-blog"><?php echo $description ?></p>
                    
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
   


                 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="col-md-12">

                     <h3 class="blog-headling">Latest Post</h3>

                           <?php
                            
                          if($latest_blog_data1->num_rows() >0)
                          {
                      foreach($latest_blog_data1->result() as $row)
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
                       <hr class="cls">
                        <div class="col-md-9"><img src="<?php echo base_url().'assets/uploads/images/'.$image ?>" class="img-responsive img-rounded bx-sado" alt="right side blog" title=""></div>
                        <div class="col-md-9"><p><span>

                        <h3 class="blog-headline-5"><a href="<?php echo base_url("frontend/blog/single_blog").'/'.$url;?>" class="custom-txt">
                        <?php echo $title ?></h3></p></span> </a>
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
              <br>
                  
          <!--         
                    <div class="col-md-12">
                     <h3 class="blog-headling">Categories</h3>
                        <em class="categories-tag"> Category name</em>
                        <em class="categories-tag"> Category name</em>
                        <em class="categories-tag"> Category name</em>
                
                    
                    </div> -->
                   
                   
                




       
                 
                
            
       




                   <?php
                            
                          if($fetch_blog_comment->num_rows() >0)
                          {
                      foreach($fetch_blog_comment->result() as $row)
                          {

                          ?>

                      <?php
                        
                  

                  
                                $name=$row->name;




                          $datatime = time($row->created_at);

                          $datatime = strtotime($row1->created_at);

                           $now = time();

                         $created_at= timespan($datatime, $now) . '&nbsp'.'ago';


                         $comment=$row->comment;

                        

                        ?>

                        </div>

  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">

   <h3 class="blog-headling">Comment:</h3>
                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12"></div>
                <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                 <ul class="timeline">
        <li>
          <div class="timeline-badge">
          <img src="<?php 
          echo base_url().'assets/uploads/images/'.$image ?>" 
          class="img-responsive img-circle blg-img"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $name ?></h4>


              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
              <?php echo $created_at ?></small></p>


                <p><?php echo $comment ?></p>
            </div>
            <div class="timeline-body">
              
            </div>
          </div>
        </li>
</ul>
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


               
        
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">
           
                <h3 class="blog-headling">Add New Comments</h3>
                
                
                  <form action="http://localhost/main-website/frontend/blog/add_comment" method="Post">
                <div class="row">
                  
                    <div class="col-md-12 ">
                        <div class="form-group margin-news-form">
                            <label for="comment">
                                Comment</label>
                            <textarea name="message" id="comment" class="form-control" rows="8" cols="24" required="required"
                                placeholder="Comment Please"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                         <div class="form-group">
                            <label for="name">
                                Name</label>

                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />

                            <input type="hidden" name="url" class="form-control" id="id" value="<?php echo $row1->url; ?>" />
                        </div>


                            
                            
                    
                        
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        
                         <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                        </div>
                        
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        
                         <div class="form-group">
                             <label for="email">
                             </label>
<br>
                             <div class="col-xs-10 text-md-right">

                                    <input class="btn btn-default btn-block single-post-btns" type="submit" name="comment" id="example-number-input" value="Post Comment">
                      
                        </div>
                        </div>
                       
                        
                       
                       
                    </div>
              
                </div>
                </form>
                 
              
                 
            </div>
            
            
            
            </div>   
            
<div class="clearfix"></div>
     
     
          
        
        </div>
      
        
        
    
  </div>
                   
	<!-- //welcome -->
 
    <!-- news-letter -->
      
<?php
 $this->load->view('frontend/layouts/footer');

?>

<?php
 $this->load->view('frontend/layouts/js_include');

?>
	
    
</body>	
</html>