<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white" style="border: 0px solid rgba(0, 0, 0, 0.125);">
            <div class="row" id="selectable">
                <form action="<?php echo base_url();?>admin/News/submit_news" method="post" enctype="multipart/form-data">
                <div class="row row-md mb-2">
                    <div class="col-md-12">
                        <div class="col-md-8">

                                <div class="box box-block bg-white">
                                    <div class="form-group row">
                                        <label for="package-url" class="col-xs-2 col-form-label">Package URL</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" id="package-url" name="package_url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-meta-title" class="col-xs-2 col-form-label">Meta Title</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text"  id="package-meta-title" name="package_meta_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-meta-description" class="col-xs-2 col-form-label">Meta Description</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text"  id="package-meta-description" name="package_meta_description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-meta-robots" class="col-xs-2 col-form-label">Meta Robots</label>
                                        <div class="col-xs-10">
                                            <select class="form-control"  id="package-meta-robots" name="package_meta_robots">
                                                <option value="0">.......</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-title" class="col-xs-2 col-form-label">Package Title</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" id="package-title" name="package_title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-image" class="col-xs-2 col-form-label">Package Image</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="file" id="package-image" name="package_image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-description" class="col-xs-2 col-form-label">Package Description</label>
                                        <div class="col-xs-10">
                                            <textarea class="form-control" id="package-description" rows="4" name="package_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-duration" class="col-xs-2 col-form-label">Package Duration</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="number"  id="example-url-input" name="package_duration">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package-price" class="col-xs-2 col-form-label">Price</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="number"  id="package-price" name="package_price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                                        <div class="col-xs-10 text-md-right">
                                            <input class="btn btn-danger" type="submit" name="submit" value="Add Package" id="example-number-input">
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
                                <img src="images/pkg1.jpg" class="img-rersponsive" alt="img" title="img" style="    width: 100%;
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
                                            <input type="file" id="file" class="custom-file-input" name="image" onchange="this.form.submit()">
                                            <span class="custom-file-control"></span>
                                            </form>
                                        </label>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="checkbox" class="chk inpt "  id="img1" name="img1" value="0"  />
                                            <label for="img1" class="customlbl"> <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" ></label>
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
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/pkg1.jpg" style="width: 95%;padding-bottom: 15px;" >
                                        </div>
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