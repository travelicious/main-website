   
<!--created by Aditya-->

<div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            
                            <?php if(!empty($req_data)){?>    
<table class="table table-grey-head mb-md-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Email Id</th>
                                <th>Created Date</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($req_data as $val) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo ++$i; ?></th>
                                    <td><?php echo $val->name; ?></td>
                                  
                                    <td>
                                        <?php echo $val->address; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->contact_number; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->email_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->created_at; ?>
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