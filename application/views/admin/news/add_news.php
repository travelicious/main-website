
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Add News | Admin</title>

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
        <div class="box box-block bg-white" style="border: 0px solid rgba(0, 0, 0, 0.125);">
            <div class="row" id="selectable">
                <form action="<?php echo base_url();?>admin/News/submit_news" method="post" enctype="multipart/form-data">
                <div class="row row-md mb-2">
                    <div class="col-md-12">
                        <div class="col-md-8">

                                <div class="box box-block bg-white">
                            <div class="form-group row">
                                <label for="url" class="col-xs-2 col-form-label">News URL</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" id="url" name="url">
                                </div>
                            </div>
                            <div class="form-group row">
                                        <label for="news-meta-title" class="col-xs-2 col-form-label">Meta Title</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text"  id="news-meta-title" name="news_meta_title">
                                        </div>
                            </div>
                            <div class="form-group row">
                                <label for="news-meta-description" class="col-xs-2 col-form-label">Meta Description</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="news-meta-description" name="news_meta_description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="news-meta-robots" class="col-xs-2 col-form-label">Meta Robots</label>
                                <div class="col-xs-10">
                                    <select class="form-control"  id="news-meta-robots" name="news_meta_robots">
                                        <option value="0">.......</option>
                                        <option value="NOINDEX">FOLLOW</option>
                                        <option value="INDEX">NOFOLLOW</option>
                                        <option value="NOINDEX">NOFOLLOW</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-xs-2 col-form-label">News Title</label>
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

                        </div>
                        <div class="col-md-4" >
                            <div class="col-md-12" style="    background: #d6d4d4;
                        padding: 41px 10px;
                        margin: 2px 0px;">
                                <div class="panel panel-default">
                                    <div class="panel-headline">
                                        <h4>Package Category</h4>
                                    </div>
                                    <div class="panel-body">
                                        <label><input type="checkbox"> <span>Kerala </span></label><br>
                                        <label><input type="checkbox"> <span>Kerala </span></label><br>
                                        <label><input type="checkbox"> <span>Kerala </span></label><br>
                                        <label><input type="checkbox"> <span>Kerala </span></label><br>
                                        <label><input type="checkbox"> <span>Kerala </span></label>
                                    </div>
                                    <div class="panel-booter">
                                        <a href="#">Add New Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="    background: #d6d4d4;
                        padding: 41px 10px;
                        margin: 8px 0px;">
                                <div class="panel panel-default">
                                    <div class="panel-body" style="    margin-top: -32px;">
                                        <a class="" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <hr>
                                        <div class="collapse" id="collapseExample">
                                            <div class="well">
                                                Separate tags with commas
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="#">Choose from the most used tags</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <img src="<?php echo base_url(); ?>assets/images/pkg1.jpg" class="img-rersponsive" alt="img" title="img" style=" width: 100%;
                               margin-left: -13px;
                               height: 150px;" data-toggle="modal" data-target="#myModal">
                                <div class="caption">
                                    <p style="margin-left: -14px;"><em>Click images for edit or  update</em></p>
                                    <a href="#" style="margin-left: -14px;"> Remove Featured Images</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog custom-dilog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <ul class="nav nav-tabs mb-0-5" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Upload Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Media Library</a>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <h6 class="mt-2">File browser</h6>
                                        <label class="custom-file">
                                            <form action="<?php echo base_url(); ?>admin/photos/upload" method="post" enctype="multipart/form-data">
                                            <input type="file" name="image" id="file" class="custom-file-input"  onchange="this.form.submit()">
                                            <span class="custom-file-control"></span>
                                            </form>
                                        </label>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="row">

                                    <?php

                                        foreach ($fetch_photo->result() as $row) {
                                    ?>

                                        <div class="col-md-3">
                                            <input type="checkbox" class="chk inpt "  id="img1" name="img1" value="0"  />
                                            <label for="img1" class="customlbl"> <img class="img-responsive" width="100" src="<?php echo base_url();?>assets/images/<?php echo $row->image_name; ?>"></label>
                                        </div>
                                    <?php } ?>
                                        <!-- <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div> -->
                                        <div class="cleadrfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" >Set as thumbnail images</button>
                        </div>
                    </div>
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