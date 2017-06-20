
<div class="content-area py-1">
    <div class="container-fluid">

    </div>
    <h1><a href="http://localhost/main-website/admin/blogs/add_blog">Add New Blog</h1></a>
<hr>

<div class="row row-md mb-2">

    <div class="col-md-12">
        <div class="box bg-white">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-8">

                    <div class="box box-block bg-white">

                        <div class="form-group row">
                            <label for="url" class="col-xs-2 col-form-label">URL</label>
                            <div class="col-xs-8">
                                <input class="form-control" type="text" name="url">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-xs-2 col-form-label">Title</label>
                            <div class="col-xs-8">
                                <input class="form-control" type="text" name="title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-xs-2 col-form-label">Image</label>
                            <div class="col-xs-8">
                                <input class="form-control" type="file"  name="files">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-xs-2 col-form-label">Description</label>
                            <div class="col-xs-8">
                                <textarea class="form-control" rows="4" name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="meta_title" class="col-xs-2 col-form-label">Meta_Title</label>
                            <div class="col-xs-8">
                                <input class="form-control" type="text" name="meta_title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="meta_robot" class="col-xs-2 col-form-label">Meta_Robot</label>
                            <div class="col-xs-8">
                                <select class="form-control" name="meta_robot">
                                    <option>......</option>
                                    <option>NOINDEX , NOFOLLOW</option>

                                    <option>INDEX , NOFOLLOW</option>

                                    <option>NOINDEX , FOLLOW</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="meta_description" class="col-xs-2 col-form-label">Meta_Description</label>
                            <div class="col-xs-8">
                                <textarea class="form-control" rows="4" name="meta_description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-xs-2 col-form-label">Author</label>
                            <div class="col-xs-8">
                                <input class="form-control" type="text" name="author">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                            <div class="col-xs-10 text-md-right">
                                <input class="btn btn-danger" type="submit" name="submit" value="Add Blog" id="example-number-input">
                            </div>
                        </div>





                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="box box-block bg-white">-->
                        
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
                      
                        
                    <!--</div>-->
                    
                </div>
                  </form>




        </div>


    </div>
