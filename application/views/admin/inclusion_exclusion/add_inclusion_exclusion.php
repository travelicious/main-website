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

                 <div class="row">
     
          <div class="col-lg-12">
            <section class="panel default blue_title h2">


<div class="panel-body">
 <div class="row">
<div class="col-sm-3"></div>
 <div class="col-sm-6">

            <form action="<?php echo base_url();?>admin/inclusion_exclusion/submit_inclusion_exclusion" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text" style="color:white;">Text</label>
                  <textarea name="text" class="form-control" id="text" placeholder="text">
                    </textarea>
                </div>
        
                <!-- <div class="form-group">
                    <label for="type" style="color:white;">Type</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="type">
                </div> -->

                <select name="type">

                    <option value="inclusion">Inclusion</option>
                    <option value="exclusion">Exclusion</option>   

                </select>
          
              
               <button type="submit" name="submit" class="btn btn-primary" value="submit">Add
               </button>
            
            </form>

</div> 
</div>
</div>

        </section>
    </div>
  </div>

                
                <div class="box box-block bg-white">
                    <div class="clearfix mb-1">
                        <h5 class="float-xs-left">Container Section</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12"></div>
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