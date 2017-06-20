   
<!--created by Aditya-->

<div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            
                            <?php if(!empty($fetch_data->result())){?>    
<table class="table table-grey-head mb-md-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                <th>Creation Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($fetch_data->result() as $val) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo ++$i; ?></th>
                                    <td><?php echo $val->service_name; ?></td>
                                  
                                    <td>
                                        <?php echo $val->created_at; ?>
                                    </td>
                                    
                                     <td>
                                         <a href="<?php echo base_url("admin/services/edit_services").'/'.$val->id;?>">Edit</a>
                                    </td>
                                    <td>
                                         <a href="<?php echo base_url("admin/services/delete_services").'/'.$val->id;?>">Delete</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>


                        </tbody>
                        
                    </table>
                    <?php } else { ?>
                    <div class="col-md-12 alert-info">
                        Currently there is no data.
                    </div>
                    
                    <?php } ?>
                            
                        </div>
                    </div>
                </div>