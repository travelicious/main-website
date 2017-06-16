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
            


<div class="content-area py-1">
    <div class="container-fluid">

        <div class="row row-md mb-2">
            <div class="col-md-12">
                <h1>Adding News</h1>
            </div>
        </div>





        <div class="row row-md mb-2">

            <div class="col-md-12">
                <div class="box bg-white">
                    <form action="<?php echo base_url();?>admin/News/submit_news" method="post" enctype="multipart/form-data">

                        <div class="box box-block bg-white">

                            <div class="form-group row">
                                <label for="url" class="col-xs-2 col-form-label">News URL</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" id="url" name="url">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-xs-2 col-form-label">Title</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="title" name="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="files" class="col-xs-2 col-form-label">Image</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="file" id="files" name="files">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-xs-2 col-form-label">Description</label>
                                <div class="col-xs-10">
                                    <!-- <input class="form-control" type="text"  id="description" name="description"> -->
                                    <textarea name="description" class="form-control" id="description" placeholder="Description">
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-xs-2 col-form-label">Author</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="author" name="author">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                                <div class="col-xs-10 text-md-right">
                                    <input class="btn btn-danger" type="submit" name="submit" value="Add News" id="example-number-input">
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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