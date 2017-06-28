
<!DOCTYPE html>
<html lang="en">
<head>
<title>News Details | Travelicious Holiday</title>

<?php
$this->load->view('frontend/layouts/css_include');
?>

</head>
<body>
	<!-- banner Alamgir -->

    <div class="container-fluid bg-custom container-height" >
   <div class="row">
    <div class="col-md-3">
   <a href="<?php echo base_url(); ?>frontend/home"> 
       <img src="<?php echo base_url();?>assets/frontend/images/logo.png" class="img-responsive logos" alt="logo" title="logo title"></a>
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
   
	<div class="banner news-bnr">
		<div class="agileinfo-dot ">
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

        <?php     foreach ($front_single_news->result() as $row){


                                            ?>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">
           
                <h2 class="blog-headling"><?php echo $row->title; ?></h2>
                <em class="single-news-em"><?php echo $row->created_at; ?></em>
                <em style="color: blue;" class="single-news-em">Total Views : <?php echo $row->view_count; ?></em>
            
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo" style="text-align: justify;">
               <p class="single-news-para"><span><img src="<?php echo base_url();?>assets/images/news/<?php echo $row->image; ?>" class="img-responsive" alt="single news" title="single news"></span>
               <?php echo $row->description; ?>
                </p>
                
            </div>
            <?php } ?>
            
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">
           
                <h3 class="blog-headling">Comment: 2</h3>
                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12"></div>
                <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
    <ul class="timeline">


<?php     foreach ($front_single_news_comment->result() as $row2){


                                            ?>

        <li>
          <div class="timeline-badge"><img src="<?php echo base_url();?>assets/frontend/images/comment-1.jpg" class="img-responsive img-circle"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $row2->u_name; ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php echo $row2->created_at; ?></small></p>
                <p><?php echo $row2->message; ?>.</p>
            </div>
            <div class="timeline-body">
              
            </div>
          </div>
        </li>

        <?php } ?>

        <!-- <li>
          <div class="timeline-badge danger"><img src="<?php echo base_url();?>assets/frontend/images/comment-2.jpg" class="img-responsive img-circle"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
            <div class="timeline-body">
            
            </div>
          </div>
        </li> -->
  <!-- ____________________ Alamgir ________________ -->
       
       
    </ul>
           </div>

                <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12"></div>

       
 </div>


             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 demo cont">
           
                <h3 class="blog-headling">Add New Comments</h3>
                
                
                <form action="<?php echo base_url();?>frontend/News/submit_news_comment" method="get"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group margin-news-form">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                            <input type="hidden" class="form-control" name="url" id="id" value="<?php echo $row->url; ?>" />
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button name="post_btn" class="btn btn-default btn-block single-post-btn"> Post Comment</button>
                        </div>
                    </div>
                  </div>
                    
                    <div class="clearfix"></div>
               
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