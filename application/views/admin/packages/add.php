
<?php print_r($posted_data); ?>

<div class="content-area py-1">
    <div class="container-fluid">

        <div class="row row-md mb-2">
            <div class="col-md-12">
                <h2>Adding A New Package</h2>
            </div>
        </div>





        <div class="row row-md mb-2">

            <div class="col-md-12">
                <div class="box bg-white">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="box box-block bg-white">

                            <div class="form-group row">
                                <label for="package-url" class="col-xs-2 col-form-label">Package URL</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" id="package-url" name="package_url">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="package-meta-title" class="col-xs-2 col-form-label">Meta Title</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="package-meta-title" name="package_meta_title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="package-meta-description" class="col-xs-2 col-form-label">Meta Description</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text"  id="package-meta-description" name="package_meta_description">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="package-meta-robots" class="col-xs-2 col-form-label">Meta Robots</label>
                                <div class="col-xs-10">
                                    <select class="form-control"  id="package-meta-robots" name="package_meta_robots">
                                   <option value="0">.......</option>
                                     </select>
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="package-title" class="col-xs-2 col-form-label">Package Title</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" id="package-title" name="package_title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="package-image" class="col-xs-2 col-form-label">Package Image</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="file" id="package-image" name="package_image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="package-description" class="col-xs-2 col-form-label">Package Description</label>
                                <div class="col-xs-10">
                                <textarea class="form-control" id="package-description" rows="4" name="package_description"></textarea>
                            </div>
                            </div>





                            <div class="form-group row">
                                <label for="package-duration" class="col-xs-2 col-form-label">Package Duration</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="number"  id="example-url-input" name="package_duration">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="package-price" class="col-xs-2 col-form-label">Price</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="number"  id="package-price" name="package_price">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label"></label>
                                <div class="col-xs-10 text-md-right">
                                    <input class="btn btn-danger" type="submit" name="submit" value="Add Package" id="example-number-input">
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
