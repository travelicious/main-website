<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Edit Destination</title>
    <?php $this->load->view('admin/layouts/CSS_Include'); ?>
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <?php 
        $id = $_GET['id'];
        $selectquery = $this->db->query("SELECT * FROM `destination` WHERE id = $id");
        foreach ($selectquery->result() as $rows) {

            $title = $rows->title;
            $url = $rows->url;
            $description = $rows->description;
            $meta_title = $rows->meta_title;
            $meta_robots = $rows->meta_robots;
            $meta_description = $rows->meta_description;
        }
    ?>
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md mb-2">
                    <div class="col-md-12">
                        <div class="box bg-white">
<div class="box box-block bg-white">
    <div class="clearfix mb-1">
     <h2 class="float-xs-left">Edit Destination</h5>
    </div>
     <hr>
     <br>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-6">
<form  id="formupdateDestination" name="formupdateDestination" enctype="multipart/form-data" method="POST">
    <input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>">
  <div class="form-group">
    <label for="title">Destination Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?=$title?>">
    <small id="emailHelp" class="form-text text-muted">Ex.:- Title: New Delhi</small>
  </div>
  <div class="form-group">
    <label for="url">Destination slug URL</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="Enter Sulg URL" value="<?=$url?>">
    <small id="emailHelp" class="form-text text-muted">Ex.:- Slug URL: new-delhi</small>
  </div>
  
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?=$description?></textarea>
  </div>
  <br>
 <div class="form-group">
    <label for="meta_title">Meta Title</label>
    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="<?php echo $meta_title; ?>">
  </div>

   <div class="form-group">
    <label for="meta_robots">Meta Robots</label>
    <input type="text" class="form-control" id="meta_robots" name="meta_robots" placeholder="Enter Meta Robot" value="<?php echo $meta_robots; ?>">
  </div>

   <div class="form-group">
    <label for="meta_description">Meta Description</label>
    <input type="text" class="form-control" id="meta_description" name="meta_description" value="<?=$meta_description?>">
  </div>

 <div class="form-group">

    <small id="msg" class="form-text">&nbsp;</small>
    <br>
    <input type="submit" class="btn btn-primary" name="submit">
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



        <!-- Footer -->
        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>