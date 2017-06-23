
<!--created by Aditya-->
<!--view use for both add and edit services-->

<?php
$value = "";
$cat_id = "";
if (!empty($srchd_data)) {
    $value = $srchd_data->category_name;
    $name = 'edit';
    $cat_id = $srchd_data->id;
    $placeholder = "Edit Category";
} else {
    $name = 'submit';

     $placeholder = "Add Category";
}
?>

<div class="successmsg"></div> 
<div class="row row-md mb-2">

    <div class="col-md-12">
        <div class="box bg-white">

            
            <form  action="<?php echo base_url('admin/Category/add_category_proces'); ?>" method="POST">
                <div class="box box-block bg-white">
                    <input type="hidden" name="cat_id" value="<?php echo $cat_id?>"/>

                    <div class="form-group row">
                        <label for="url" class="col-xs-2 col-form-label">Category Name</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" name="category_name" value="<?php echo $value?>"/>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                        <div class="col-xs-10 text-md-left">

                            <input class="btn btn-danger" type="submit" name="<?php echo $name?>" value="<?php echo $placeholder?>" id="example-number-input">

                            

                        </div>
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>


