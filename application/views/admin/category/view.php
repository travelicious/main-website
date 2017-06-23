   
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
                                <td id="row<?php echo $val->id ?>">
                                    <a href="#">
                                        <button class="btn btn-danger btn-sm checkbox-toggle" title="Delete" onclick="delete_catg(<?php echo $val->id ?>);"><i class="fa fa-trash-o"></i></button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    function delete_catg(cat_id) {
        if (confirm("Are you sure?")) {
            var q = ("<?php echo site_url('admin/category/delete_category/'); ?>");
            $.ajax({
                type: 'post',
                data: 'cat_id=' + cat_id,
                url: q,
                success: function (responce) {
                    var obj = JSON.parse(responce);
                    var msg = "";
                    if (obj.st == 1) {
                        msg = "Ctegory sucessfully deleted";
                        var successmsg = '<div class="box-body">';
                        successmsg += '<div class="alert alert-success alert-dismissable">';
                        successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                        successmsg += '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
                        successmsg += msg;
                        successmsg += '</div>';
                        successmsg += '</div>';
                        $('.successmsg').html(successmsg);
                        $("#row" + cat_id).css('display', 'none');

                    } else if (obj.st == 0) {
                        msg = "Unable to process you request";
                        var successmsg = '<div class="box-body">';
                        successmsg += '<div class="alert alert-success alert-dismissable">';
                        successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                        successmsg += '<h4><i class="icon fa fa-check"></i> Alert!</h4>';
                        successmsg += msg;
                        successmsg += '</div>';
                        successmsg += '</div>';
                        $('.successmsg').html(successmsg);
                    }


                }
                });

        }

    }
</script>