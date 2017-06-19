<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>News List | Admin</title>

    <?php $this->load->view('admin/layouts/CSS_Include'); ?>



   
</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 <?php $this->load->view('admin/layouts/Side_Navigation'); ?>


    <!-- Header Alamgir  -->
    <?php $this->load->view('admin/layouts/Header'); ?>

    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                

<!-- ____________________ Alamgir ________________ -->

                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-responsive">
                          
                                <tr>
                                    <th>URL</th>
                                    <th>News Title</th>
                                    <th>image</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th>Modified At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <?php

                                        foreach ($fetch_data->result() as $row) {


                                            ?>

                                            <tr>
                                            <td> <?php echo $row->url;?></td>
                                            <td> <?php echo $row->title;?></td>
                                            <td> <img class="img-responsive" src="<?php echo base_url();?>assets/images/news/<?php echo $row->image; ?>"></td>
                                            <td> <?php echo substr($row->description,0,100);?></td>
                                            <td> <?php echo $row->author;?></td>
                                            <td> <?php echo $row->created_at;?></td>
                                            <td> <?php echo $row->modified_at;?></td>
                                            <td><a href="<?php echo base_url();?>admin/News/edit_news?id=<?php echo $row->id; ?>"><?php echo 'Edit';?></a> </td>
                                            <td><a href="<?php echo base_url();?>admin/News/delete_news?id=<?php echo $row->id; ?>"> <?php echo 'Delete';?></a></td>
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