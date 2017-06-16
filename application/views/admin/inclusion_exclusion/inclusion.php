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
                


                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-responsive">
                          
                                <tr>
                                    <th>Text</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <?php

                                        foreach ($fetch_data->result() as $row) {


                                            ?>

                                            <tr>
                                            <td> <?php echo $row->text;?></td>
                                            <td><a href="<?php echo base_url();?>admin/inclusion_exclusion/edit_inclusion_exclusion?id=<?php echo $row->id; ?>"><?php echo 'Edit';?></a> </td>
                                            <td><a href="<?php echo base_url();?>admin/inclusion_exclusion/delete_inclusion?id=<?php echo $row->id; ?>"> <?php echo 'Delete';?></a></td>
                                            </tr>


                                            <?php
                                        }
                                ?>
                             
                               
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box box-block bg-white">
                    <div class="clearfix mb-1">
                        <h5 class="float-xs-left">Container Section</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12"></div>
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