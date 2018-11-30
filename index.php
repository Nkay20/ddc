
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>DDC</title>
    <!-- Custom CSS -->
    <link href="assets/css/chartist.min.css" rel="stylesheet">
    <link href="assets/css/c3.min.css" rel="stylesheet">
    <link href="assets/css/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/customs.css" rel="stylesheet">


    <!-- Calender Assets -->
    <script src="assets/scheduler/dhtmlxscheduler.js" type="text/javascript"></script>
    <script src="assets/scheduler/dhtmlxscheduler_serialize.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/scheduler/dhtmlxscheduler_material.css" type="text/css">
    <script src="assets/scheduler/dhtmlxscheduler_all_timed.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">

        function init() {
            scheduler.config.xml_date="%Y-%m-%d %H:%i";
            scheduler.config.first_hour = 6;
            scheduler.init('scheduler_here',new Date(),"month");
            scheduler.load("assets/scheduler/events.json", "json");
            scheduler.config.all_timed = true;
            document.getElementById("myBody").style.visibility = "visible";
        }
        // setInterval(function(){
        //     console.log(scheduler.toJSON());
        // }, 1000);
    </script>
    <style type="text/css">
        .dhtmlx_message_area {
            display: none;
        }
        .sidebar-item a:hover {
            border-top: 5px solid rgb(255, 112, 77);
        }


    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="container" id="myBody" onload="init();" style="visibility: hidden;">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper  -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">

                            <img src="http://ddchub.ddc.nycnet/_catalogs/masterpage/images/logo.png" alt="" class="" />

                            </b>

                            <span class="logo-text">

                            </span>
                        </a>
                    </div>

                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mdi mdi-clock" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                City Time
                            </a>
                        </li>
                        <p class="my-auto">|</p>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mdi mdi-phone" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Staff Directory
                            </a>
                        </li>
                        <p class="my-auto">|</p>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mdi mdi-school" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                City Share
                            </a>
                        </li>
                        <p class="my-auto">|</p>
                        <!-- ============================================================== -->
                        <!-- Internal Apps -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i style="color: blue; font-size: 25px !important;" class="mdi mdi-apps"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd ">
                                <div class="container-fluid" style="margin-top: 10px;">
                                    <button type="button" style="width: 100%;" class="btn waves-effect waves-light btn-light">INTERNAL APPS</button>
                                    <div class="row text-center" style="margin-top: 10px;">

                                      <div class="col-sm-4">
                                      <a href="www.google.com" target="_blank">    <img src="http://ddchub.ddc.nycnet/_catalogs/masterpage/images/benchmarkWaffle.png"></a>
                                          <p>Benchmark</p>
                                      </div>

                                      <div class="col-sm-4">
                                      <a href="www.google.com" target="_blank">    <img src="http://ddchub.ddc.nycnet/_catalogs/masterpage/images/help-desk.png"></a>
                                          <p>Knowledge Based</p>
                                      </div>

                                      <div class="col-sm-4">
                                      <a href="www.google.com" target="_blank">    <img src="http://ddchub.ddc.nycnet/_catalogs/masterpage/images/pims.png"></a>
                                          <p>PIMS</p>
                                      </div>

                                      <div class="col-sm-4">
                                      <a href="www.google.com" target="_blank">    <img src="http://ddchub.ddc.nycnet/_catalogs/masterpage/images/OfficeWaffle.png"></a>
                                          <p>DDC Hub</p>
                                      </div>





                                      <div class="container-fluid" style="margin-top: 10px;">
                                          <button type="button" style="width: 100%;" class="btn waves-effect waves-light btn-light">SOCIAL MEDIA</button>
                                          <div class="row text-center" style="margin-top: 10px;">


                                        <div class="col-sm-4">
                                        <a href="www.google.com" target="_blank">    <i style="font-size: 35px; color: blue;" class="mdi mdi-facebook"></i> </a>
                                            <p>Facebook</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <i style="font-size: 35px; color: blue;" class="mdi mdi-twitter"></i>
                                            <p>Twitter</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <a href="https://www.google.com">   <i style="font-size: 35px; color: blue;" class="mdi mdi-onedrive"></i> </a>
                                            <a href="https://www.google.com"> <p> One Drive </p>   </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Internal Apps -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <div style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3 text-right" style="margin-top: 5px;">
                        <a href="javascript:void(0)">Translate <i class="fas fa-angle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a href="javascript:void(0)">Text-Size <i class="fas fa-text-height"></i></a>
                    </div>
                    <div class="col-sm-3 text-right">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search this site" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Home</span></li>
                        <li class="sidebar-item"><a href="index.html" class="sidebar-link"><span class="hide-menu"> Home </span></a></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Divisions</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Divisions</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><span class="hide-menu">Table Responsive</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Table Footable</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Staff Resources</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Staff Resources</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Acronyms/Abbreviation</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">External Resources</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Forms</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><span class="hide-menu">Letterheads</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Manuals/Guids</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Policies/Protocols</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Safety Advisors</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Portal</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Portal</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><span class="hide-menu">Table Responsive</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Table Footable</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">My Collaboration Sites</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">My Collaboration Sites</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><span class="hide-menu">Table Jsgrid</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><span class="hide-menu">Table Responsive</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><span class="hide-menu">Table Footable</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Knowledge Center</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false" style="background-color: rgb(255, 112, 77); color: white;"><span class="hide-menu"><i class="fas fa-external-link-alt" style="font-size: 13px; color: white;"></i>Knowledge Center</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-color: white;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Calendar</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <form action="sendData.php" method="post" id="jsonFormID">
                <textarea id="jsonDataTextBoxID" hidden="" name="jsonData"></textarea>
                <button class="btn btn-block btn-lg btn-info" hidden="" type="submit" name="submit">Save Events</button>
            </form>
                <div id="scheduler_here" class="dhx_cal_container" style="margin:0px;
        padding:0px;
        height:700px;
        overflow:hidden;">
                    <div class="dhx_cal_navline">
                        <div class="dhx_cal_prev_button">&nbsp;</div>
                        <div class="dhx_cal_next_button">&nbsp;</div>
                        <div class="dhx_cal_today_button"></div>
                        <div class="dhx_cal_date"></div>
                        <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                        <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                        <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
                    </div>
                    <div class="dhx_cal_header"></div>
                    <div class="dhx_cal_data"></div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
  <div class="row">
<div class="col-sm-4">

<ul class="list-unstyled flink">
                           <li>
                               <a href="http://www1.nyc.gov/site/ddc/about/about-ddc.page" target="_blank">About DDC


                               </a>
                           </li>
                           <li>
                               <a href="/Pages/HelpDesk.aspx" target="_blank">Help Desk


                               </a>
                           </li>
                           <li>
                               <a href="https://hrb.nycaps.nycnet/" target="_blank">Employee Self-Service
                               </a>
                           </li>
                       </ul>


</div>



<div class="col-sm-4">
<ul class="list-unstyled flink">
                            <li>
                                <a href="/Pages/SiteMap.aspx">Site Map

                                </a>
                            </li>
                            <li>
                                <a href="http://a856-gbol.nyc.gov/GBOLWebsite/GreenBook/Online " target="_blank">Green Book Online


                                </a>
                            </li>
                                                                <li>
                                <a href="http://cityshare.nycnet/eGuide/servlet/eGuide" target="_blank">Citywide Contact Directory


                                </a>
                            </li>


                        </ul>


</div>



<div class="col-sm-4">

<div class="address">
                            <strong>NYC Department of Design and Construction


                            </strong>
                            <br />



  30-30 Thomson Avenue                                                                                                            <br />



  Long Island City, NY 11101                                                                                                            <br />



  (718) 391-1000                                                                                                            <br />
                        </div>
                        <div class="bottom-link">
                            <a href="http://www1.nyc.gov/site/ddc/index.page" target="_blank">DDC Website


                            </a>


|                                                                                                              <a href="https://www.google.com/maps/place/30-30+Thomson+Ave,+Long+Island+City,+NY+11101/@40.7446062,-73.9361434,17z/data=!3m1!4b1!4m2!3m1!1s0x89c2592b52bd194d:0xc1ce0c149008a62b" target="_blank">Map


                            </a>


|                                                                                                              <a href="https://www1.nyc.gov/site/ddc/about/directions.page" target="_blank">Directions


                            </a>

</div>
</div>

            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/app.init.horizontal.js"></script>
    <script src="assets/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.js"></script>
    <!--This page JavaScript -->
    <script src="assets/js/moment.min.js"></script>
    <script type="text/javascript">

    </script>
    <script type="text/javascript">
        setInterval(function(){
            $('#jsonDataTextBoxID').val(scheduler.toJSON());
            var jsonData = scheduler.toJSON();
            var form = $('#jsonFormID');
            var formData = $(form).serialize();
            $.ajax({
                type: 'POST',
                url: 'somepage.php',
                data: formData
            });
        }, 1000);
    </script>
</body>

</html>
