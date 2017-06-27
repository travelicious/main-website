


<div class="content-area py-1">
    <div class="container-fluid">

         <div class="row row-md mb-2">
             <div class="col-md-12">


            <form action="" method="">
                <select name="destination" class="custom-select">
                    <option value='NULL'>Select City</option>
                <?php
                $i=0;
                
                foreach ($all_destination as $destination) {


                    echo "<option value='$destination->id'>$destination->title</option>";

                 } ?>
                </select>
                <input class="btn btn-primary" type="submit" value="Filter By City">
                <a href="<?php echo base_url(); ?>admin/packages/" class="btn btn-primary">Show All Packages</a>
            </form>

             </div>
        </div>





            <div class="row row-md mb-2">

    <div class="col-md-12">
        <div class="box bg-white">
            <table class="table table-grey-head mb-md-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Package Title</th>
                    <th>URL</th>
                    <th>DESCRIPTION</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Creation Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;

                foreach ($all_packages as $package)
                {
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $package->title; ?></td>
                        <td>
                            <a class="text-primary" href="#"><span class="underline"><?php echo $package->url; ?></span></a>
                        </td>
                        <td>
                            <?php echo $package->description; ?>
                        </td>
                        <td>
                            <?php echo $package->price; ?>
                        </td>
                        <td>
                            <img src="<?php echo base_url() . 'assets/images/'.$package->image; ?>">
                        </td>
                        <td>
                            <?php echo $package->created_at; ?>
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
    </div>
</div>
