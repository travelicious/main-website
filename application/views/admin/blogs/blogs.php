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
               

  <h1><a href="http://localhost/main-website/admin/blogs/add_blog">Add New Blog</h1></a>
  <br><br>
                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-responsive">
                  <tbody>
                                <tr>
                                    <th>##</th>
                                    <th>URL</th>
                                    <th>TITLE</th>
                                    <th>IMAGE</th>
                                    <th>DESCRIPTION</th>
                                 
                                    <th>AUTHOR</th>
                                    <th>CREATED_AT</th>
                                    <th>MODIFIED_AT</th>
                            
                                    <th>DELETE</th>
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
                      
                             <td><img src="<?php echo base_url().'assets/uploads/images/'.$row->image; ?>">
                             </td>

                            <td>
							
							  <?php 
											     
								if(strlen($row->description) > 100)
								{
								  $description = substr($row->description, 0, 100);
                                  echo $description.' ......'; 												   
								}
								else
								{
								  echo $row->description;
							 	}
							  ?>
							
							</td>

                        

                            <td><?php echo $row->author;?></td>
                            <td><?php echo $row->created_at;?></td>
                            <td><?php echo $row->modified_at;?></td>
                          
                           

                                <td><a href="<?php echo base_url();?>admin/blogs/delete_blog?id=<?php echo $row->id;?>" onclick="return confirm('Are You Sure You Want To Delete')"> <?php echo 'Delete';?></a></td>

                           </tr>

                          <?php
$sn++;

                         }
                           }
                         else
                           {
                            ?>
<tr><td>
<b>No Record Found,</b>
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