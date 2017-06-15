<?php
        

?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Admin</title>

    <?php $this->load->view('admin/layouts/CSS_Include'); ?>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 <?php $this->load->view('admin/layouts/Side_Navigation'); ?>


    <!-- Header -->
    <?php $this->load->view('admin/layouts/Header'); ?>

    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">News </h6>
                                <h1 class="mb-1">1,325</h1>
                                <span class="tag tag-danger mr-0-5">+17%</span>
                                <span class="text-muted font-90">News</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">NO. OF VISITORE</h6>
                                <h1 class="mb-1"> 47,855</h1>
                                <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">Add News</h6>
                                <h1 class="mb-1">6,800</h1>
                                <span class="tag tag-primary mr-0-5">+125</span> 
                                 <span class="text-muted font-90">arraving today</span>
                            </div>
                        </div>
                    </div>

                </div>

                 <div class="row">
     
          <div class="col-lg-12">
            <section class="panel default blue_title h2">


<div class="panel-body">
 <div class="row">
<div class="col-sm-3"></div>
 <div class="col-sm-6">



            <form action="<?php echo base_url();?>admin/News/submit_photo" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="image_title">Image Title</label>
                    <input type="text" name="image_title" class="form-control" id="image_title" placeholder="Title" >
                </div>
    
                <div class="form-group">
                    <label for="files">Select Image</label>
                    <input type="file" name="files[]" class="form-control" id="files" multiple> 
                </div>

                <button type="submit" name="submit_photo" class="btn btn-primary" value="Upload">Upload</button>
   
            </form>

</div> 

        </section>
      </div>
    </div>
  </div>
</div>
                
                <div class="box box-block bg-white">
                    <div class="clearfix mb-1">
                        <h5 class="float-xs-left">Container Section</h5>

                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>

<!DOCTYPE html>
<html>
<head>
    <title>Add Image Page</title>
</head>
<body style="text-align: center;">
        
</form>
</body>
</html>

