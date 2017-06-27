
<!DOCTYPE html>
<html lang="en">
<head>
<title>News | Travels</title>

<?php
$this->load->view('frontend/layouts/css_include');
?>

</head>
<body>
    <!-- banner -->
    <div class="container-fluid bg-custom">
   <div class="row">
       <div class="col-md-3">
       <a href="<?php echo base_url(); ?>frontend/home">
       <img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" class="img-responsive logos" alt="logo" title="logo title"></a>
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
          <?php
               foreach ($front_latest_news->result() as $row2);
                ?>
           <div class="panel panel-body pbody">
               <h3 class="h3-news1">Top <mark>News</mark></h3>
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mrgbt">
               <a href="<?php echo base_url("frontend/news/single_news").'/'.'top'; ?>">
               <img src="<?php echo base_url(); ?>assets/frontend/images/news-left.jpg" class="img-responsive img-rounded" alt="" title=""> </a>
             <div class="caption">
             <h4>This is News Headline</h4>
                 <p class="new-para-news">ce the 1500s, when an unknown printer took a galley of 
type and scram bled it to make a type specimen booLore
m Ipsum is simply dummy text of the printing and typese
tting industry. Lorem Ipsum has been the industry's sta
ndard dummy text ever since the 1500s, when an unkno
wn printer </p>
                 <a href="<?php echo base_url("frontend/news/single_news").'/'.'top'; ?>" class="text-danger">Read More</a>
                 
             </div>
               
               </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mrgbt">
                 <a href="<?php echo base_url("frontend/news/single_news").'/'.'top'; ?>">
               <img src="<?php echo base_url(); ?>assets/frontend/images/news-left.jpg" class="img-responsive img-rounded" alt="" title=""> </a>
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
                 <a href="<?php echo base_url("frontend/news/single_news").'/'.'top'; ?>" class="text-danger">Read More</a>
             </div>
               </div>
          </div>   
            </div>

<!-- __________  Center News ____________ -->

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <h3 class="h3-news">Latest <mark>News</mark> </h3>

                <?php
               foreach ($front_latest_news->result() as $row) {
                ?>

             <div class="panel panel-body pbody" >
                 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                 <a href="<?php echo base_url("frontend/news/single_news").'/'.$row->url; ?>">
                 <img src="<?php echo base_url(); ?>assets/images/news/<?php echo $row->image; ?>" class="img-responsive img-rounded" alt="" tilte="" style="height: 89px;">
                     <div class="caption">
                     <h4 style="text-align: center;"><?php echo $row->title; ?></h4></a>
                     </div>
                 </div>
                 <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
               
                 <p>Date :<b><?php echo $row->created_at; ?></b></p>
                     <p class="new-para-news"> <?php echo substr($row->description,0,300); ?>  </p>
                     <a href="<?php echo base_url("frontend/news/single_news").'/'.$row->url; ?>" class="text-right text-danger readmore">Read More</a>
                 
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
                foreach ($front_most_visited_news->result() as $row3) { 
                ?>


             <div class="panel panel-body pbody">
                 <p class="right-side ">
                 <a href="<?php echo base_url("frontend/news/single_news").'/'.$row3->url; ?>">
                 <img src="<?php echo base_url(); ?>assets/images/news/<?php echo $row3->image; ?>" class="img-responsive img-rounded" alt="" tilte="" style="height: 59px; width: 79px; display: inline-block;">
                 <span>&nbsp &nbsp<?php echo $row3->title; ?></span></a>
                 <p>Date :<b><?php echo $row3->created_at; ?></b></p>
                 <?php echo substr($row3->description,0,200); ?><br>

                    <!--  <span>..........</span> -->
                     <a style="float : right" href="<?php echo base_url("frontend/news/single_news").'/'.$row3->url; ?>" class="text-right text-danger">Read More</a>
                     </p>
                 <div class="clearfix"></div>
                 
                 
                </div>
                
                <?php } ?>


            </div>
      
      </div>
        
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