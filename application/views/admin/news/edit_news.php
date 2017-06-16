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
                <h1>Editing News</h1>
            </div>
        </div>





        <div class="row row-md mb-2">

            <div class="col-md-12">
                <div class="box bg-white">

                <!-- ____________________ Alamgir Hussain ________________ -->

                    <form action="<?php echo base_url();?>admin/News/save_news" method="post" enctype="multipart/form-data">

                    <?php foreach ($fetch_item->result() as $row); ?>

                        <div class="box box-block bg-white">

                            <div class="form-group row">
                                <label for="url" class="col-xs-2 col-form-label">News URL</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" id="url" name="url" value="<?php echo $row->url; ?>">
                                    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row->id; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-xs-2 col-form-label">Title</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="title" name="title" value="<?php echo $row->title; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="files" class="col-xs-2 col-form-label">Image</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="file" id="files" name="files">
                                    <span><img width="100" src="<?php echo base_url();?>assets/images/news/<?php echo $row->image; ?>"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-xs-2 col-form-label">Description</label>
                                <div class="col-xs-10">
                                    <!-- <input class="form-control" type="text"  id="description" name="description" value="<?php echo $row->description; ?>"> -->
                                    <textarea name="description" class="form-control" id="description" placeholder="Description" value="<?php echo $row->description; ?>"><?php echo $row->description; ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-xs-2 col-form-label">Author</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="author" name="author" value="<?php echo $row->author; ?>">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                                <div class="col-xs-10 text-md-right">
                                    <button type="submit" name="save" class="btn btn-primary" value="save">Update</button>
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