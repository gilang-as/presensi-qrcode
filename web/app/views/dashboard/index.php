<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <?php $this->view('include/head');?>
    <!-- font -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- vendor -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/prism/prism.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/datatable/datatables.min.css">
    <!-- app -->
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
    <div class="wrapper">
        <?php $this->view('include/navbar');?>
        <?php $this->view('include/header');?>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$2310</h4>
                                                    <span>Analysts Payable</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-briefcase font-large-1 red"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area" class="height-150 WidgetAreaChart WidgetAreaChart1 WidgetAreaChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$2543</h4>
                                                    <span>Equipment Cost</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-anchor font-large-1 purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area2" class="height-150 WidgetAreaChart WidgetAreaChart2 WidgetAreaChartshadow mb-2">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$5686</h4>
                                                    <span>Analytics Output</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-share-alt font-large-1 blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area3" class="height-150 WidgetAreaChart WidgetAreaChart3 WidgetAreaChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->view('include/footer');?>
        </div>
    </div>
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
        <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
            <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
            <p>Customize &amp; Preview in Real Time</p>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
            <div class="cz-bg-image row">
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                            <label for="sidebar-bg-img" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
            <div class="cz-bg-color">
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span></div>
                </div>
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span></div>
                </div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Compact Menu</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                            <label for="cz-compact-menu" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
                <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                    <option value="small">Small</option>
                    <option value="medium" selected="">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="assets/vendors/core/jquery-3.3.1.min.js"></script>
    <script src="assets/vendors/core/popper.min.js"></script>
    <script src="assets/vendors/core/bootstrap.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/vendors/prism/prism.min.js"></script>
    <script src="assets/vendors/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="assets/vendors/screenfull/screenfull.min.js"></script>
    <script src="assets/vendors/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="assets/js/app-sidebar.js"></script>
    <script src="assets/js/notification-sidebar.js"></script>
    <script src="assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/dashboard-analytics.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>