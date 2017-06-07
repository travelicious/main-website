<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Edit Blog</title>
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



<?php foreach ($single_student as $student): ?>

<form method="post" action="<?php echo base_url() . "update_ctrl/update_student_id1"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $student->student_id; ?>">
<label>Name :</label>
<input type="text" name="dname" value="<?php echo $student->student_name; ?>">
<label>Email :</label>
<input type="text" name="demail" value="<?php echo $student->student_email; ?>">
<label>Mobile :</label>
<input type="text" name="dmobile" value="<?php echo $student->student_mobile; ?>">
<label>Address :</label>
<input type="text" name="daddress" value="<?php echo $student->student_address; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">
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


        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>