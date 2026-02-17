<!DOCTYPE HTML>
<html>

<head>
    <title>panchagavya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="e cart system" />
    <script type="application/x-javascript">
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'admin_assets/css/bootstrap.css' ?>" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'admin_assets/css/style.css' ?>" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="<?php echo base_url() . 'admin_assets/css/font-awesome.css' ?>" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='<?php echo base_url() . 'admin_assets/css/SidebarNav.min.css' ?>' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <!-- <script src="?php echo base_url() . 'admin_assets/js/jquery-1.11.1.min.js ' ?>"></script> -->
    <script src="<?php echo base_url() . 'admin_assets/js/modernizr.custom.js' ?>"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- chart -->
    <script src="<?php echo base_url() . 'admin_assets/js/Chart.js' ?>"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="<?php echo base_url() . 'admin_assets/js/metisMenu.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'admin_assets/js/custom.js' ?>"></script>
    <link href="<?php echo base_url() . 'admin_assets/css/custom.css' ?>" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->

    <!-- //pie-chart -->
    <!-- index page sales reviews visitors pie chart -->

    <!-- requried-jsfiles-for owl -->
    <link href="<?php echo base_url() . 'admin_assets/css/owl.carousel.css' ?>" rel="stylesheet">
    <script src="<?php echo base_url() . 'admin_assets/js/owl.carousel.js' ?>"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
                nav: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
</head>


<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> E Cart<span class="dashboard_text">Dashboard</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="treeview">
                                <a href="<?php echo base_url('admin/MainController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Category List</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('admin_item_list/ItemsController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Item List</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('about_us/AboutController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>About US</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('why_choose_us/WhyChooseController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Why Choose Us</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('gallery/GalleryController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Gallery</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('people_sayings/SayingsController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>People Sayings</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('admin_main/AdminController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Admin Details</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('bg_image/ImageController/index') ?>">
                                    <i class="fa fa-dashboard"></i> <span>Background Image</span>
                                </a>
                            </li>



                            <!-- <li class="header">LABELS</li>
                            <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </aside>
        </div>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->

                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">


                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div>
                <!--//end-search-box-->

                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="<?php echo base_url() . 'admin_assets/images/2.jpg ' ?>" alt=""> </span>

                                    <div class="user-name">
                                        <h4><?php echo  $this->session->userdata('name') ?></h4>
                                    </div>


                    
                                    
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix">
                                        <h6><a href="<?php echo base_url('SigninController/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></h6>
                                    </div>
                                </div>
                            </a>
                            <!-- <ul class="dropdown-menu drp-mnu">

                                <li> <a href="?php echo base_url('MainController/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>