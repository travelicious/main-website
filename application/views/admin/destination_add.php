<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Add New Destination</title>
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
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md mb-2">
                    <div class="col-md-12">
                        <div class="box bg-white">
<div class="box box-block bg-white">
    <div class="clearfix mb-1">
     <h2 class="float-xs-left">Add New Destination</h5>
    </div>
     <hr>
     <br>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-6">
<form action="#" id="formsubmitDestination" name="formsubmitDestination" onsubmit="return submitDestination()">
  <div class="form-group">
    <label for="title">Destination Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
    <small id="emailHelp" class="form-text text-muted">Ex.:- Title: New Delhi</small>
  </div>
  <div class="form-group">
    <label for="url">Destination slug URL</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="Enter Sulg URL">
    <small id="emailHelp" class="form-text text-muted">Ex.:- Slug URL: new-delhi</small>
  </div>
  
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image" name="image" aria-describedby="fileHelp">
  </div>
 
 <div class="form-group">
    <label for="meta_title">Meta Title</label>
    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title">
  </div>

   <div class="form-group">
    <label for="meta_robots">Meta Robots</label>
    <input type="text" class="form-control" id="meta_robots" name="meta_robots" placeholder="Enter Meta Robot">
  </div>

    <div class="form-group">
    <label for="meta_description">Meta Description</label>
    <textarea class="form-control" id="meta_description" name="meta_description" rows="2"></textarea>
  </div>

 <div class="form-group">

    <small id="msg" class="form-text">&nbsp;</small>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
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


<script>

function submitDestination(){

    var data = new FormData($('#formsubmitDestination')[0]); 

      var ajaxmap=$.ajax({
                      type:"POST",
                      url:"<?php echo site_url('admin/destination/submitDestination');?>",
                      data:data,
                      mimeType: "multipart/form-data",
                      contentType: false,
                      cache: false,
                      processData: false,

                     success:function(data)
                    {

                      console.log(data);
                      // return false;
                      if(data==1){
                        setTimeout(function(){ 
                            document.getElementById('msg').innerHTML = "Destination successfully add.";
                            document.getElementById('msg').style.color = "#4CAF50";
                            
                        }, 800); 
                        setTimeout(function(){ 
                            window.location.href = "<?php echo base_url()?>admin/destination";
                        }, 2000); 
                     }else{

                          setTimeout(function(){ 
                            document.getElementById('msg').innerHTML = "Destination not add try again.";
                            console.log("Error in Submission...");
                          }, 800);
                      }
                   }
             }).responseText;  
         return false;
} 

</script>   
        <!-- Footer -->
        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>