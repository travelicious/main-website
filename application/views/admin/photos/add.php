<form enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/photos/multiple_upload" method="post">


                <div class="form-group row">
              
                <div class="col-xs-6">
                <input class="form-control" type="file" id="images" name="images[]" multiple >
                </div>
                </div>
                
                <input class="btn btn-primary" type="submit" name="submit" value="UPLOAD"/>
              
            
        </form>


