<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Admin</title>

    <?php $this->load->view('admin/layouts/CSS_Include'); ?>



   
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
         <h4>Images Library</h4>
         <ol class="breadcrumb no-bg mb-1">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Package</a></li>
            <li class="breadcrumb-item active">Library</li>
         </ol>
         <div class="box box-block bg-white">
            <div role="form">
               <div class="row">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Enter Title Here" style="    width: 80%;
                        margin-left: 14px;">
                  </div>
               </div>
               <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Upload Library</button>
            </div>
            <div class="box box-block bg-white">
               <div class="row" id="selectable">
                  <div class="col-md-8" >
                     <div class="col-md-12" style="border: 1px solid #ccc;
                        min-height: 794px;">
                        <div class="panel panel-primary">
                           <div class="panel-heading" style="margin-left: -15px;
                              border-bottom: 1px solid #ccc;">
                              <!-- <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="New file">
                                 <i class="fa fa-file-o"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Save">
                                 <i class="fa fa-save"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Print">
                                 <i class="fa fa-print"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Source code">
                                 <i class="fa fa-code"></i> Source
                                 </button>
                              </div>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bold">
                                 <i class="fa fa-bold"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Italic">
                                 <i class="fa fa-italic"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Underline">
                                 <i class="fa fa-underline"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Strikethrough">
                                 <i class="fa fa-strikethrough"></i>
                                 </button>
                              </div> -->
                             <!--  <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Cut">
                                 <i class="fa fa-scissors"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Copy">
                                 <i class="fa fa-copy"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Past">
                                 <i class="fa fa-paste"></i>
                                 </button>
                              </div>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Undo">
                                 <i class="fa fa-reply"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Redo">
                                 <i class="fa fa-share"></i>
                                 </button>
                              </div>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align left">
                                 <i class="fa fa-align-left"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align center">
                                 <i class="fa fa-align-center"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align right">
                                 <i class="fa fa-align-right"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align justify">
                                 <i class="fa fa-align-justify"></i>
                                 </button>
                              </div> -->
                              <!-- <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Numbered list">
                                 <i class="fa fa-list-ol"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bulleted list">
                                 <i class="fa fa-list-ul"></i>
                                 </button>
                              </div>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Link">
                                 <i class="fa fa-link"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Unlink">
                                 <i class="fa fa-unlink"></i>
                                 </button>
                              </div>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-default"  data-toggle="tooltip" title="Picture">
                                 <i class="fa fa-picture-o"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="HTML table">
                                 <i class="fa fa-table"></i>
                                 </button>
                                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="Font">
                                 <i class="fa fa-font"></i>
                                 </button>
                              </div> -->
                           </div>
                           <div class="panel-body" style="padding-top: 26px;
                              text-align: justify;">
                              <!-- <h2>
                                 Hello and welcome
                              </h2>
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                 exercitation ullamco laboris nisi ut <a href="http://www.jquery2dotnet.com/2013/12/brand-icons-design-using-css.html">Brand Icons Design Using Css</a> aliquip ex ea commodo consequat. Duis aute
                                 irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                 pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                 deserunt mollit anim id est laborum.
                              </p> -->
                           </div>
                           <div class="panel-footer">
                           </div>
                        </div>
                     </div>
                     <script>$(document).ready(function() {
                        $('button').tooltip({container: 'body'});
                        });
                     </script>
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
                        <img  data-toggle="modal" data-target="#myModal" src="<?php echo base_url();?>assets/images/news/news_593fc689e6bc5.jpg" class="img-rersponsive" alt="img" title="img" style="width: 110%;
                           margin-left: -13px; cursor: pointer;">
                        <div class="caption">
                           <p style="margin-left: -14px;"><em>Click images for edit or  update</em></p>
                           <a href="#" style="margin-left: -14px;"> Remove Featured Images</a>
                        </div>
                     </div>
                  </div>
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
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
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
    <?php $this->load->view('admin/layouts/Footer'); ?>
   </div>
</div>



<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>