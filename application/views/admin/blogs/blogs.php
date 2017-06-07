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
                <div class="row row-md">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">SOLD PACKAGE</h6>
                                <h1 class="mb-1">1,325</h1>
                                <span class="tag tag-danger mr-0-5">+17%</span>
                                <span class="text-muted font-90">from previous period</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">NO. OF VISITORE</h6>
                                <h1 class="mb-1"> 47,855</h1>
                                <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">CUSTOMIZED PACKAGE</h6>
                                <h1 class="mb-1">6,800</h1>
                                <span class="tag tag-primary mr-0-5">+125</span>
                                <span class="text-muted font-90">arraving today</span>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-responsive">
                  <tbody>
                                <tr>
                                    <th><b>S.NO</b></th>
                                    <th><b>URL</b></th>
                                    <th><b>TITLE</b></th>
                                    <th><b>IMAGE</b></th>
                                    <th><b>DESCRIPTION</b></th>
                                    <th><b>AUTHOR</b></th>
                                    <th><b>CREATED_AT</b></th>
                                    <th><b>MODIFIED_AT</b></th>
                                    <th><b>EDIT</b></th>
                                    <th><b>DELETE</b></th>
                                </tr>
            
                              
        
                           <?php
 $sn=1;
                            
                          if($fetch_data->num_rows() >0)
                          {
                      foreach($fetch_data->result() as $row)
                          {
                          ?>
                         
                           <tr>
                            <td><?php echo $sn;?></td>
                           <td><?php echo $row->url;?></td>
                            <td><?php echo $row->title;?></td>
                             <td><?php echo $row->image;?></td>
                              <td><?php echo $row->description;?></td>
                               <td><?php echo $row->author;?></td>
                                <td><?php echo $row->created_at;?></td>
                                 <td><?php echo $row->modified_at;?></td>
                                  <td><a href="<?php echo base_url();?>admin/blogs/edit_blog?id=<?php echo $row->id; ?>"> <?php echo 'Edit';?></a></td>
                                <td><a href="<?php echo base_url();?>admin/blogs/delete_blog?id=<?php echo $row->id; ?>"> <?php echo 'Delete';?></a></td>

                           </tr>

                          <?php
$sn++;

                         }
                           }
                         else
                           {
                            ?>
<tr><td>]
No Data Found
</td>
</tr>
<?php

}

        ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box box-block bg-white">
                    <div class="clearfix mb-1">
                        <h5 class="float-xs-left">Container Section</h5>

                    </div>
                    <div class="row">
                        <div class="col-md-12">

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