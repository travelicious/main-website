
<div class="wrapper bg-white">

    <!-- Preloader -->
    <div class="preloader"></div>

    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h2 class="text-uppercase mb-1" style="color:grey">News</h2>
                                <?php
                                        $i=1;
                                        foreach ($fetch_data->result() as $row) {
                                        	  $i;
                                        	 $i++;
                                        	} 
                                        	//echo $i;exit;
                                ?>
                                <h3 class="mb-1">Total News : <?php echo $i; ?></h3>
                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
                                <!-- <span class="text-muted font-90">from previous period</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h2 class="text-uppercase mb-1" style="color:grey">Blogs</h2>
                                <?php
                                        $i=1;
                                        foreach ($fetch_data->result() as $row2) {
                                        	  $i;
                                        	 $i++;
                                        	} 
                                        	//echo $i;exit;
                                ?>
                                <h3 class="mb-1">Total Blogs : <?php echo $i; ?></h3>
                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
                                <!-- <span class="text-muted font-90">from previous period</span> -->
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h2 class="text-uppercase mb-1" style="color:grey">Packages</h2>
                                <?php
                                        $i=1;
                                        foreach ($fetch_data->result() as $row2) {
                                        	  $i;
                                        	 $i++;
                                        	} 
                                        	//echo $i;exit;
                                ?>
                                <h3 class="mb-1">Total Packages : <?php echo $i; ?></h3>
                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
                                <!-- <span class="text-muted font-90">from previous period</span> -->
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="row row-md">
	                 	<div class="col-lg-4 col-md-6 col-xs-12">
	                        <div class="box box-block bg-white tile tile-1 mb-2">
	                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
	                            <div class="t-content">
	                                <h2 class="text-uppercase mb-1" style="color:grey">Photos</h2>
	                                <?php
	                                        $i=1;
	                                        foreach ($fetch_data->result() as $row2) {
	                                        	  $i;
	                                        	 $i++;
	                                        	} 
	                                        	//echo $i;exit;
	                                ?>
	                                <h3 class="mb-1">Total Photos : <?php echo $i; ?></h3>
	                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
	                                <!-- <span class="text-muted font-90">from previous period</span> -->
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 col-xs-12">
	                        <div class="box box-block bg-white tile tile-1 mb-2">
	                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
	                            <div class="t-content">
	                                <h2 class="text-uppercase mb-1" style="color:grey">Destination</h2>
	                                <?php
	                                        $i=1;
	                                        foreach ($fetch_data->result() as $row2) {
	                                        	  $i;
	                                        	 $i++;
	                                        	} 
	                                        	//echo $i;exit;
	                                ?>
	                                <h3 class="mb-1">Total Destination : <?php echo $i; ?></h3>
	                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
	                                <!-- <span class="text-muted font-90">from previous period</span> -->
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 col-xs-12">
	                        <div class="box box-block bg-white tile tile-1 mb-2">
	                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
	                            <div class="t-content">
	                                <h2 class="text-uppercase mb-1" style="color:grey">Destination</h2>
	                                <?php
	                                        $i=1;
	                                        foreach ($fetch_data->result() as $row2) {
	                                        	  $i;
	                                        	 $i++;
	                                        	} 
	                                        	//echo $i;exit;
	                                ?>
	                                <h3 class="mb-1">Total Destination : <?php echo $i; ?></h3>
	                                <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
	                                <!-- <span class="text-muted font-90">from previous period</span> -->
	                            </div>
	                        </div>
	                    </div>
                   

                </div>


                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-grey-head mb-md-0">
                                <thead>
                               
                                </thead>
                                <tbody>
                               
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box box-block bg-white">
                    <div class="clearfix mb-1">
                        <h5 class="float-xs-left">Container Section</h5>

                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
