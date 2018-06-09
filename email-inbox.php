<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Language -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ca"></i> Canada</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
        								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
        							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
        								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
        							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Dashboard 1 </a></li>
                                <li><a href="index1.php">Dashboard 2 </a></li>
                                <li><a href="index2.php">Dashboard 3 </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Layout</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-blank.php">Blank</a></li>
                                <li><a href="layout-boxed.php">Boxed</a></li>
                                <li><a href="layout-fix-header.php">Fix Header</a></li>
                                <li><a href="layout-fix-sidebar.php">Fix Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Apps &amp; Charts</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Mailbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.php">Compose</a></li>
                                <li><a href="email-read.php">Read</a></li>
                                <li><a href="email-inbox.php">Inbox</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-flot.php">Flot</a></li>
                                <li><a href="chart-morris.php">Morris</a></li>
                                <li><a href="chart-chartjs.php">ChartJs</a></li>
                                <li><a href="chart-chartist.php">Chartist </a></li>
                                <li><a href="chart-amchart.php">AmChart</a></li>
                                <li><a href="chart-echart.php">EChart</a></li>
                                <li><a href="chart-sparkline.php">Sparkline</a></li>
                                <li><a href="chart-peity.php">Peity</a></li>
                            </ul>
                        </li>
                        <li> <a href="app-profile.php" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Ui Elements <span class="label label-rouded label-danger pull-right">12</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-alert.php">Alert</a></li>
                                <li><a href="ui-button.php">Button</a></li>
                                <li><a href="ui-dropdown.php">Dropdown</a></li>
                                <li><a href="ui-progressbar.php">Progressbar</a></li>
                                <li><a href="ui-tab.php">Tab</a></li>
                                <li><a href="ui-typography.php">Typography</a></li>
                                <li><a href="uc-calender.php">Calender</a></li>
                                <li><a href="uc-datamap.php">Datamap</a></li>
                                <li><a href="uc-nestedable.php">Nestedable</a></li>
                                <li><a href="uc-sweetalert.php">Sweetalert</a></li>
                                <li><a href="uc-toastr.php">Toastr</a></li>
                                <li><a href="uc-weather.php">Weather</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.php">Basic Forms</a></li>
                                <li><a href="form-layout.php">Form Layout</a></li>
                                <li><a href="form-validation.php">Form Validation</a></li>
                                <li><a href="form-editor.php">Editor</a></li>
                                <li><a href="form-dropzone.php">Dropzone</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-bootstrap.php">Basic Tables</a></li>
                                <li><a href="table-datatable.php">Data Tables</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-th-large"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget.php">Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">EXTRA</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Sample Pages <span class="label label-rouded label-success pull-right">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-login.php">Login</a></li>
                                        <li><a href="page-register.php">Register</a></li>
                                        <li><a href="page-invoice.php">Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-error-400.php">400</a></li>
                                        <li><a href="page-error-403.php">403</a></li>
                                        <li><a href="page-error-404.php">404</a></li>
                                        <li><a href="page-error-500.php">500</a></li>
                                        <li><a href="page-error-503.php">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.php">Google Maps</a></li>
                                <li><a href="map-vector.php">Vector Map</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-level-down"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">
                                        <a class="btn btn-danger btn-block waves-effect waves-light" href="email-compose.php">Compose</a>

                                        <div class="mail-list mt-4">
                                            <a class="list-group-item border-0 text-danger" href="#"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i><b>Inbox</b><span class="label label-danger float-right ml-2">8</span></a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-star font-18 align-middle mr-2"></i>Starred</a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft<span class="label label-info float-right ml-2">32</span></a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent Mail</a>
                                            <a class="list-group-item border-0" href="#"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Trash</a>
                                        </div>

                                        <h6 class="mt-5 m-b-15">Labels</h6>

                                        <div class="list-group b-0 mail-list">
                                            <a class="list-group-item border-0" href="#"><span class="fa fa-circle text-info mr-2"></span>Web App</a>
                                            <a class="list-group-item border-0" href="#"><span class="fa fa-circle text-warning mr-2"></span>Project 1</a>
                                            <a class="list-group-item border-0" href="#"><span class="fa fa-circle text-purple mr-2"></span>Project 2</a>
                                            <a class="list-group-item border-0" href="#"><span class="fa fa-circle text-pink mr-2"></span>Friends</a>
                                            <a class="list-group-item border-0" href="#"><span class="fa fa-circle text-success mr-2"></span>Family</a>
                                        </div>

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class="inbox-rightbar">

                                        <div role="toolbar" class="">
                                            <div class="btn-group">
                                                <button class="btn btn-light waves-effect" type="button"><i class="mdi mdi-archive font-18 vertical-middle"></i></button>
                                                <button class="btn btn-light waves-effect" type="button"><i class="mdi mdi-alert-octagon font-18 vertical-middle"></i></button>
                                                <button class="btn btn-light waves-effect" type="button"><i class="mdi mdi-delete-variant font-18 vertical-middle"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-light dropdown-toggle waves-effect" type="button">
                                                                                    <i class="mdi mdi-folder font-18 vertical-middle"></i>
                                                                                    <b class="caret m-l-5"></b>
                                                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Move to</span>
                                                    <a href="javascript: void(0);" class="dropdown-item">Social</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Promotions</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Updates</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-light dropdown-toggle waves-effect" type="button">
                                                                                    <i class="mdi mdi-label font-18 vertical-middle"></i>
                                                                                    <b class="caret m-l-5"></b>
                                                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Label as:</span>
                                                    <a href="javascript: void(0);" class="dropdown-item">Updates</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Social</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Promotions</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Forums</a>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-light dropdown-toggle waves-effect" type="button">
                                                                                    More
                                                                                    <span class="caret m-l-5"></span>
                                                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">More Option :</span>
                                                    <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Add Star</a>
                                                    <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="mt-4">
                                                <div class="">
                                                    <ul class="message-list">
                                                        <li class="unread">
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk1">
                                                                        <label class="toggle" for="chk1"></label>
                                                                    </div>
                                                                    <p class="title">Lucas Kriebel (via Twitter)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Lucas Kriebel (@LucasKriebel) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                                    </div>
                                                                    <div class="date">11:49 am</div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk3">
                                                                        <label class="toggle" for="chk3"></label>
                                                                    </div>
                                                                    <p class="title">Randy, me (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Last pic over my village &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                    </div>
                                                                    <div class="date">5:01 am</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk4">
                                                                        <label class="toggle" for="chk4"></label>
                                                                    </div>
                                                                    <p class="title">Andrew Zimmer</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Mochila Beta: Subscription Confirmed &nbsp;&ndash;&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                    </div>
                                                                    <div class="date">Mar 8</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="unread">
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk5">
                                                                        <label class="toggle" for="chk5"></label>
                                                                    </div>
                                                                    <p class="title">Infinity HR</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Sveriges Hetaste sommarjobb &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                                    </div>
                                                                    <div class="date">Mar 8</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk6">
                                                                        <label class="toggle" for="chk6"></label>
                                                                    </div>
                                                                    <p class="title">Web Support Dennis</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Re: New mail settings &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Will you answer him asap?</span>
                                                                    </div>
                                                                    <div class="date">Mar 7</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk7">
                                                                        <label class="toggle" for="chk7"></label>
                                                                    </div>
                                                                    <p class="title">me, Peter (2)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Off on Thursday &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                                                    </div>
                                                                    <div class="date">Mar 4</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk8">
                                                                        <label class="toggle" for="chk8"></label>
                                                                    </div>
                                                                    <p class="title">Medium</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                                    </div>
                                                                    <div class="date">Feb 28</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk9">
                                                                        <label class="toggle" for="chk9"></label>
                                                                    </div>
                                                                    <p class="title">Death to Stock</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Montly High-Res Photos &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                                    </div>
                                                                    <div class="date">Feb 28</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk10">
                                                                        <label class="toggle" for="chk10"></label>
                                                                    </div>
                                                                    <p class="title">Revibe</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Weekend on Revibe &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                                    </div>
                                                                    <div class="date">Feb 27</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk11">
                                                                        <label class="toggle" for="chk11"></label>
                                                                    </div>
                                                                    <p class="title">Erik, me (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">That's great, see you on Thursday!</span>
                                                                    </div>
                                                                    <div class="date">Feb 24</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk12">
                                                                        <label class="toggle" for="chk12"></label>
                                                                    </div>
                                                                    <p class="title">KanbanFlow</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp; <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                                    </div>
                                                                    <div class="date">Feb 24</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk13">
                                                                        <label class="toggle" for="chk13"></label>
                                                                    </div>
                                                                    <p class="title">Tobias Berggren</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                                    </div>
                                                                    <div class="date">Feb 23</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk14">
                                                                        <label class="toggle" for="chk14"></label>
                                                                    </div>
                                                                    <p class="title">Charukaw, me (7)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Hey man &nbsp;&ndash;&nbsp; <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                                    </div>
                                                                    <div class="date">Feb 23</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="unread">
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk15">
                                                                        <label class="toggle" for="chk15"></label>
                                                                    </div>
                                                                    <p class="title">me, Peter (5)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Home again! &nbsp;&ndash;&nbsp; <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                                    </div>
                                                                    <div class="date">Feb 21</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk16">
                                                                        <label class="toggle" for="chk16"></label>
                                                                    </div>
                                                                    <p class="title">Stack Exchange</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                                    </div>
                                                                    <div class="date">Feb 21</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk17">
                                                                        <label class="toggle" for="chk17"></label>
                                                                    </div>
                                                                    <p class="title">Google Drive Team</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">You can now use your storage in Google Drive &nbsp;&ndash;&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                                    </div>
                                                                    <div class="date">Feb 20</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="unread">
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk18">
                                                                        <label class="toggle" for="chk18"></label>
                                                                    </div>
                                                                    <p class="title">me, Susanna (11)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Train/Bus &nbsp;&ndash;&nbsp; <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span>
                                                                    </div>
                                                                    <div class="date">Feb 19</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk19">
                                                                        <label class="toggle" for="chk19"></label>
                                                                    </div>
                                                                    <p class="title">Peter, me (3)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Hello &nbsp;&ndash;&nbsp; <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                                    </div>
                                                                    <div class="date">Mar. 6</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="email-read.php">
                                                                <div class="col-mail col-mail-1">
                                                                    <div class="checkbox-wrapper-mail">
                                                                        <input type="checkbox" id="chk20">
                                                                        <label class="toggle" for="chk20"></label>
                                                                    </div>
                                                                    <p class="title">me, Susanna (7)</p><span class="star-toggle fa fa-star-o"></span>
                                                                </div>
                                                                <div class="col-mail col-mail-2">
                                                                    <div class="subject">Since you asked... and i'm inconceivably bored at the train station &nbsp;&ndash;&nbsp;
                                                                        <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                                    </div>
                                                                    <div class="date">Mar. 6</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- panel body -->
                                        </div>
                                        <!-- panel -->

                                        <div class="row">
                                            <div class="col-7">
                                                Showing 1 - 20 of 289
                                            </div>
                                            <div class="col-5">
                                                <div class="btn-group float-right">
                                                    <button class="btn btn-gradient waves-effect" type="button"><i class="fa fa-chevron-left"></i></button>
                                                    <button class="btn btn-gradient waves-effect" type="button"><i class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>