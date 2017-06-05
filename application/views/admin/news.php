<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Admin</title>

    <?php $this->load->view('admin/layouts/CSS_Include'); ?>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 <?php $this->load->view('admin/layouts/Side_Navigation'); ?>


    <!-- Header -->
    <?php $this->load->view('admin/layouts/Header'); ?>

    <div class="site-content">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">SOLD PACKAGE</h6>
                                <h1 class="mb-1">1,325</h1>
                                <span class="tag tag-danger mr-0-5">+17%</span>
                                <span class="text-muted font-90">from previous period</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">NO. OF VISITORE</h6>
                                <h1 class="mb-1"> 47,855</h1>
                                <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 mb-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase mb-1">CUSTOMIZED PACKAGE</h6>
                                <h1 class="mb-1">6,800</h1>
                                <span class="tag tag-primary mr-0-5">+125</span>
                                <span class="text-muted font-90">arraving today</span>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row row-md mb-2">

                    <div class="col-md-12">
                        <div class="box bg-white">
                            <table class="table table-grey-head mb-md-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Project</th>
                                    <th>Last update</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jonathan Mel</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">First project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">5 minutes ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-success progress-sm d-inline-block mb-0" value="44" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Larry Hal</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Second project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">3 days ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-danger progress-sm d-inline-block mb-0" value="75" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ron Carran</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Third project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">Last monday</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-warning progress-sm d-inline-block mb-0" value="20" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Carleton Josiah</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Another project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">5 minutes ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-primary progress-sm d-inline-block mb-0" value="10" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Wolfe Stevie</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Old project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">3 days ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-info progress-sm d-inline-block mb-0" value="90" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Vance Osborn</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Important project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">Last monday</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-warning progress-sm d-inline-block mb-0" value="35" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Jonathan Mel</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">First project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">5 minutes ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-success progress-sm d-inline-block mb-0" value="44" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Larry Hal</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Second project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">3 days ago</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-danger progress-sm d-inline-block mb-0" value="75" max="100">100%</progress>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Ron Carran</td>
                                    <td>
                                        <a class="text-primary" href="#"><span class="underline">Third project</span></a>
                                    </td>
                                    <td>
                                        <span class="text-muted">Last monday</span>
                                    </td>
                                    <td>
                                        <progress class="progress progress-warning progress-sm d-inline-block mb-0" value="20" max="100">100%</progress>
                                    </td>
                                </tr>
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
        <!-- Footer -->
        <?php $this->load->view('admin/layouts/Footer'); ?>
    </div>

</div>

<?php $this->load->view('admin/layouts/JS_Include'); ?>
</body>


</html>