

<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Title -->
        <title>View Photos.</title>

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


                        <div class="row row-md mb-2">

                            <div class="col-md-12">
                                <div class="box bg-white">
                                    <table class="table table-grey-head mb-md-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image Title</th>
                                                <th>Images</th>
                                                <th>Alt</th>
                                                <th>Created Date/Time</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($photos_fetch->result() as $val) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo ++$i; ?></th>
                                                    <td><?php echo $val->image_tiltle; ?></td>
                                                    <td style="display: none;"></td>

                   
                      <div class="col-md-12 blog-home-ing bdr-block">
                    <!-- <img class="img-responsive" width="100" src="<?php echo base_url();?>assets/images/<?php echo $val->image_name; ?>"> -->

                                                    <td> 
                                                        <img  src="<?php echo base_url("assets/images") . '/' . $val->image_name; ?>"  class="img-responsive img-thumbnail" width="20%" alt=""/>


                                                    </td>
                                                    <td><?php echo $val->img_alt ?></td>
                                                    <td><?php echo $val->created_at; ?></td>


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