<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Manage Destination</title>
    <?php $this->load->view('admin/layouts/CSS_Include'); ?>
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
    <?php 
    $selectquery = $this->db->query("SELECT * FROM `destination` ORDER BY id DESC");
    $total = $selectquery->num_rows();
    ?>
                            <table class="table table-grey-head mb-md-0" style="border: none;">
                                <thead>
                                <tr>
                                    <th style="text-align: left"><a href="<?php echo base_url()?>admin/destination/destination_add">Add New</a></th>
                                    <th style="text-align: center">Destinations</th>
                                    <th style="text-align: right">Total: <?=$total?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="3" style="background: #e8ebf0">
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            <table class="table table-grey-head mb-md-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>URL</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
    <?php 
    if($total<1)
    {
?>
<tr><td>No data Found..!</td></tr>
<?php
    }else{
        $i=1;
        foreach ($selectquery->result() as $rows) {
            $flag = $rows->flag;

            if($flag == 1)
            {
                $status="Active";
            }else{
                $status="Deactive";
            }

    ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$rows->title?></td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline"><?=$rows->url?></span></a>
                                    </td>
                                    <td>
                                       <span><?=$rows->description?></span>
                                    </td>
                                    <td>
                                        <span class="text-muted"><img src="<?php echo  base_url()?>assets/images/destination/<?=$rows->image?>" style="width:100px"></span>
                                    </td>
                                    <td>
                                        <a href="#" onclick="changestatus(<?=$rows->id?>,<?=$flag?>)"><?=$status?></a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url()?>admin/destination/destination_edit?id=<?=$rows->id?>">Edit</a>
                                    </td>
                                </tr>
    <?php
        $i++; 
        } 
    }   
    ?>

                                </tbody>
                            </table>
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