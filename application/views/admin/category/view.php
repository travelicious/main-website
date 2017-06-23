   
<!--created by Aditya-->
<div class="successmsg"></div>

<div class="row row-md mb-2">

    <div class="col-md-12">
        <div class="box bg-white">

            <?php if (!empty($fetch_category)) { ?>    
                <table class="table table-grey-head mb-md-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Creation Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($fetch_category as $val) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo ++$i; ?></th>
                                <td><?php echo $val->category_name; ?></td>

                                <td>
                                    <?php echo $val->created_date; ?>
                                </td>

                                <td>

                                    <a href="<?php echo base_url('admin/category/edit_category') . '/' . $val->id; ?>" onclick="">
                                        <button class="btn btn-success btn-sm checkbox-toggle" title="Edit"><i class="fa fa-edit"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('admin/category/delete_category') . '/' . $val->id; ?>" onclick="return confirm('Are You Sure You Want To Delete')">
                                        <button class="btn btn-danger btn-sm checkbox-toggle" title="Delete" ><i class="fa fa-trash-o"></i></button>
                                    </a>
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
