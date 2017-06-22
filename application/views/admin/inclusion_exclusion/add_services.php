
<!--created by Aditya-->
<!--view use for both add and edit services-->

<?php
$value = "";
$s_id = "";
if (!empty($srchd_data)) {
    $value = $srchd_data->service_name;
    $name = 'edit';
    $s_id = $srchd_data->id;
    $placeholder = "Edit Services";
} else {
    $name = 'submit';
<<<<<<< HEAD
     $placeholder = "Add Services";
=======
    $placeholder = "Add Services";
>>>>>>> 022f2e93ca6bc11ab62122740f8dc31a35f3da32
}
?>

<div class="successmsg"></div> 
<div class="row row-md mb-2">

    <div class="col-md-12">
        <div class="box bg-white">
<<<<<<< HEAD
            <form id="save_service_data" action="<?php echo base_url('admin/Services/add_services_data')?>" method="post">
                
                    <input type="hidden" name="service_id" value="<?php echo $s_id?>"/>
                
=======
            <form id="save_service_data" action="<?php echo base_url('admin/Services/add_services_data') ?>" method="post">

                <input type="hidden" name="service_id" value="<?php echo $s_id ?>"/>

>>>>>>> 022f2e93ca6bc11ab62122740f8dc31a35f3da32

                <div class="box box-block bg-white">

                    <div class="form-group row">
                        <label for="url" class="col-xs-2 col-form-label">Service Name</label>
                        <div class="col-xs-8">
                            <input class="form-control" type="text" name="service_name" value="<?php echo $value ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                        <div class="col-xs-10 text-md-left">
<<<<<<< HEAD
                            <input class="btn btn-danger" type="submit" name="<?php echo $name ?>" value="<?php echo $placeholder?>" id="example-number-input">
=======
                            <input class="btn btn-danger" type="submit" name="<?php echo $name ?>" value="<?php echo $placeholder ?>" id="example-number-input">
>>>>>>> 022f2e93ca6bc11ab62122740f8dc31a35f3da32
                        </div>
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>


