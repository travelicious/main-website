<!--<form enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/photos/image_upload" method="post" id="img_uploadform">-->

<div class="successmsg"></div>
<form enctype="multipart/form-data" id="img_uploadform">

    
    <div class="form-group row">

        <div class="col-xs-6">
            <lable>Image Title</lable>
            <input class="form-control" type="text" id="img_title" name="img_title" multiple >
        </div>
    </div>

    <div class="form-group row">

        <div class="col-xs-6">
            <lable>Image Title</lable>
            <input class="form-control" type="text" id="img_alt" name="img_alt" multiple >
        </div>
    </div>

    <div class="form-group row">

        <div class="col-xs-6">
            <input class="form-control" type="file" id="images" name="images" >
        </div>
    </div>

    <div class="form-group row">

        <div class="col-xs-6">
            <input class="btn btn-primary" type="submit" name="submit" value="UPLOAD"/>
        </div>
    </div>



</form>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script>
      $(function () {

        $("#img_uploadform").submit(function (event) {
            
                event.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('admin/photos/image_upload') ?>",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        var obj = JSON.parse(response);
                        var msg = "";
                        if (obj.st == 1) {
                            msg = "Data Inserted Sucessfuly.";
                            var successmsg = '<div class="box-body">';
                            successmsg += '<div class="alert alert-success alert-dismissable">';
                            successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            successmsg += '<h4>	<i class="icon fa fa-check"></i> Sucess!</h4>';
                            successmsg += msg;
                            successmsg += '</div>';
                            successmsg += '</div>';
                            $('.successmsg').html(successmsg);
                            $('.successmsg').hide(5000);
                            $("#img_uploadform")[0].reset();
                            $('.successmsg').show();
                            $('.successmsg').hide(5000);
                        }
                     
                        else if (obj.st == 0) {
                            msg = "file not selected. ";
                            var successmsg = '<div class="box-body">';
                            successmsg += '<div class="alert alert-danger alert-dismissable">';
                            successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                            successmsg += '<h4>	<i class="icon fa fa-check"></i> Sorry!</h4>';
                            successmsg += '</div>';
                            successmsg += '</div>';
                            $('.successmsg').html(response);
                        }

 
                    }
                });
            
        });
    });
</script>