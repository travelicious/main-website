<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Add New Blog</title>
    <?php $this->load->view('admin/layouts/CSS_Include'); ?>
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>

input#submit {
margin-top:20px;
font-size:18px;
background:linear-gradient(#22abe9 5%,#36caf0 100%);
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
#textboxid
{
    height:35px;
    font-size:14pt;
}

</style>
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
     <h1><a href="http://localhost/main-website/admin/blogs/add_blog">Add New Blog</h1></a>
    </div>
     <hr>
     <br>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-6">


        <div id="container">
<?php echo form_open('http://localhost/main-website/admin/blogs/add_blog'); ?>
<?php if (isset($message)) 
{ 
  ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<div class="form-group">
<?php echo form_label('Blog URL:'); ?> <?php echo form_error('url'); ?><br />
<?php echo form_input(array('id' =>'textboxid','name' => 'url','size' =>'55')); ?><br />
</div>

<div class="form-group">
<?php echo form_label('Blog Title:'); ?> <?php echo form_error('title'); ?><br />
<?php echo form_input(array('id' =>'textboxid','name' => 'title','size' =>'55')); ?><br />
</div>

<div class="form-group">
<?php echo form_label('Image:'); ?> <?php echo form_error('image'); ?><br />
<?php echo form_input(array('id' =>'textboxid','type' => 'file', 'name' => 'image')); ?><br />
</div>

<div class="form-group">
<?php echo form_label('Description:'); ?> <?php echo form_error('description'); ?><br />
<?php echo form_textarea(array('id' =>'textboxid','name' => 'description','rows' => '5','cols' => '57')); ?><br />
</div>


<div class="form-group">
<?php echo form_label('Author:'); ?> <?php echo form_error('author'); ?><br />
<?php echo form_input(array('id' =>'textboxid','name' => 'author','size' =>'55')); ?><br />
</div>

<div class="form-group">
<?php echo form_submit(array('id' =>'submit', 'value' => 'Add')); ?>
<?php echo form_close(); ?><br/>
</div>
<div id="fugo">

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


        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>