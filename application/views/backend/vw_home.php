<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Covid19 | Pujotirto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    </head>


    <body>

<div id="page-wrapper">

<!-- Top Bar Start -->
<div class="topbar" id="topnav">

<!-- Top navbar -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="">
                <a href="<?php echo base_url(); ?>dashboard" class="logo">
        COVID19
            </a>
                </div>
            </div>

            <div class="navbar-custom navbar-left">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li>
                            <a href="index.html">
                                <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="ti-files"></i></span><span> Pages </span> </a>
                            <ul class="submenu">
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-forget-password.html">Forget Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                <li><a href="pages-session-expired.html">Session Expired</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><span><i class="ti-spray"></i></span><span> Other </span> </a>
                            <ul class="submenu">
                                <li>
                                    <a href="ui-elements.html">UI Elements</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#">Components</a>
                                    <ul class="submenu">
                                        <li><a href="components-range-slider.html">Range Slider</a></li>
                                        <li><a href="components-alerts.html">Alerts</a></li>
                                        <li><a href="components-icons.html">Icons</a></li>
                                        <li><a href="components-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="typography.html"> Typography </a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> Forms </a>
                                    <ul class="submenu">
                                        <li><a href="forms-general.html">General Elements</a></li>
                                        <li><a href="forms-advanced.html">Advanced Form</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> Tables </a>
                                    <ul class="submenu">
                                        <li><a href="tables-basic.html">Basic tables</a></li>
                                        <li><a href="tables-advanced.html">Advanced tables</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="charts.html"> Charts </a>
                                </li>

                                <li>
                                    <a href="maps.html"> Maps </a>
                                </li>

                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="ti-widget"></i></span><span> Extra Pages </span> </a>
                            <ul class="submenu">
                                <li><a href="extras-timeline.html">Timeline</a></li>
                                <li><a href="extras-invoice.html">Invoice</a></li>
                                <li><a href="extras-profile.html">Profile</a></li>
                                <li><a href="extras-calendar.html">Calendar</a></li>
                                <li><a href="extras-faqs.html">FAQs</a></li>
                                <li><a href="extras-pricing.html">Pricing</a></li>
                                <li><a href="extras-contacts.html">Contacts</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>

            <!-- Top nav Right menu -->
            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                <li class="top-menu-item-xs">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
                <li class="hidden-xs">
                    <form role="search" class="navbar-left app-search pull-left">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li class="dropdown top-menu-item-xs">
                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                    </a>
                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                        <li class="list-group notification-list" style="height: 267px;">
                            <div class="slimscroll">
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-diamond bg-primary"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-cog bg-warning"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-bell-o bg-custom"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">Updates</h5>
                                        <p class="m-0">
                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-user-plus bg-danger"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                            <small>You have 10 unread messages</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-diamond bg-primary"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>

                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left p-r-10">
                                        <em class="fa fa-cog bg-warning"></em>
                                        </div>
                                        <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                            <small>There are new settings available</small>
                                        </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--<li>-->
                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                <!--<small class="font-600">See all notifications</small>-->
                            <!--</a>-->
                        <!--</li>-->
                    </ul>
                </li>

                <li class="dropdown top-menu-item-xs">
                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- end container -->
</div> <!-- end navbar -->
</div>
<!-- Top Bar End -->


<!-- Page content start -->
<div class="page-contentbar">

<!-- START PAGE CONTENT -->
<div id="page-right-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20">Form Elements</h4>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                <div class="col-md-10">
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" value="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Placeholder</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Text area</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="col-md-6">
                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-md-2 control-label">Readonly</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Disabled</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Static control</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Helping text</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Helping text">
                                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Input Select</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <h6>Multiple select</h6>
                                    <select multiple="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
                <!-- end row -->

                <div class="row m-b-20 p-t-50">
                    <div class="col-md-6">
                        <h5 class="m-t-0 header-title"><b>Input States</b></h5>
                        <p class="text-muted m-b-30 font-13">
                            Bootstrap includes validation styles for error, warning, and success states on form controls.
                        </p>

                        <form class="form-horizontal" role="form">

                            <div class="form-group has-success">
                                <label class="col-md-3 control-label" for="state-success">Success</label>
                                <div class="col-md-6">
                                    <input type="text" id="state-success" name="state-success" class="form-control" placeholder="...">
                                </div>
                            </div>


                            <div class="form-group has-warning">
                                <label class="col-md-3 control-label" for="state-warning">Warning</label>
                                <div class="col-md-6">
                                    <input type="text" id="state-warning" name="state-warning" class="form-control" placeholder="...">
                                </div>
                            </div>

                            <div class="form-group has-error">
                                <label class="col-md-3 control-label" for="state-danger">Danger</label>
                                <div class="col-md-6">
                                    <input type="text" id="state-danger" name="state-danger" class="form-control" placeholder="...">
                                </div>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-3 control-label">Input with success </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-3 control-label">Input with warning </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control inputmask">
                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-error has-feedback">
                                <label class="col-sm-3 control-label">Input with error </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control inputmask">
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Custom Icons</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Custom icons">
                                    <i class="fa fa-envelope form-control-feedback l-h-34"></i>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-md-6">
                        <h5 class="m-t-0 header-title"><b>Input Sizes</b></h5>
                        <p class="text-muted m-b-30 font-13">
                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                        </p>

                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-small">Small</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-normal">Normal</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-large">Large</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Grid Sizes</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-5 col-sm-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-sm-5">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-sm-6">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-sm-9">
                                </div>
                            </div>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <h5 class="p-t-50 header-title"><b>Input groups</b></h5>
                <p class="text-muted m-b-30 font-13">
                    Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <code>.input-group</code> with an <code>.input-group-addon</code> or <code>.input-group-btn</code> to prepend or append elements to a single <code>.form-control</code>.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label" for="example-input1-group1">Static</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                </div>

                                <div class="input-group m-t-10">
                                    <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <div class="input-group m-t-10">
                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                    <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </div> <!-- form-group -->

                        </form>
                    </div>

                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label" for="example-input1-group2">Buttons</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </span>
                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                </div>
                                <div class="input-group m-t-10">
                                    <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                    </span>
                                </div>
                                <div class="input-group m-t-10">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                                    </span>
                                    <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                                    </span>
                                </div>
                            </div> <!-- form-group -->

                        </form>
                    </div>

                    <div class="col-md-4">
                        <form role="form">
                            <div class="form-group">
                                <label class="control-label" for="example-input1-group3">Dropdowns</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="input-group m-t-10">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary" style="overflow: hidden; position: relative;">Action</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>

                                </div>
                            </div> <!-- form-group -->

                        </form>
                    </div>
                </div>
                <!-- end row -->


                <div class="row p-t-50">
                    <div class="col-md-6 m-b-20">
                        <h5 class="m-b-20 header-title"><b>Basic example</b></h5>

                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <div class="col-md-6 m-b-20">
                        <h5 class="m-b-20 header-title"><b>Horizontal form</b></h5>

                        <form class="form-horizontal m-t-10" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-3 control-label">Re Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox222" type="checkbox">
                                        <label for="checkbox222">
                                            Check me out !
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-info">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- end row -->


                <h5 class="p-t-50 header-title">Checkbox and Radio</h5>

                <div class="row">
                    <div class="col-md-4">
                        <div class="m-b-20">

                            <h5>Basic</h5>

                            <p class="text-muted font-13 m-b-15">
                                Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                            </p>

                            <div class="checkbox">
                                <input id="checkbox0" type="checkbox">
                                <label for="checkbox0">
                                    Default
                                </label>
                            </div>
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox111" type="checkbox">
                                <label for="checkbox111">
                                    Custom
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" type="checkbox" checked>
                                <label for="checkbox2">
                                    Primary
                                </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Success
                                </label>
                            </div>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Info
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox5" type="checkbox" checked>
                                <label for="checkbox5">
                                    Warning
                                </label>
                            </div>
                            <div class="checkbox checkbox-danger">
                                <input id="checkbox6" type="checkbox" checked>
                                <label for="checkbox6">
                                    Danger
                                </label>
                            </div>
                            <div class="checkbox checkbox-dark">
                                <input id="checkbox6c" type="checkbox">
                                <label for="checkbox6c">
                                    Dark
                                </label>
                            </div>



                            <p class="text-muted font-13 m-b-15 m-t-20">Checkboxes without label text <code>.checkbox-single</code></p>
                            <div class="checkbox checkbox-single">
                                <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                <label></label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-single">
                                <input type="checkbox" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                                <label></label>
                            </div>


                            <p class="text-muted font-13 m-b-15 m-t-20">Inline checkboxes</p>
                            <div class="checkbox checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1"> Inline One </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                <label for="inlineCheckbox2"> Inline Two </label>
                            </div>
                            <div class="checkbox checkbox-pink checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                <label for="inlineCheckbox3"> Inline Three </label>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="m-b-20">

                            <h5>Circled</h5>

                            <p class="text-muted font-13 m-b-15">
                                <code>.checkbox-circle</code> for roundness.
                            </p>

                            <div class="checkbox checkbox-custom checkbox-circle">
                                <input id="checkbox08" type="checkbox" checked>
                                <label for="checkbox08">
                                    Custom
                                </label>
                            </div>

                            <div class="checkbox checkbox-circle">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">
                                    Simply Rounded
                                </label>
                            </div>
                            <div class="checkbox checkbox-info checkbox-circle">
                                <input id="checkbox8" type="checkbox" checked>
                                <label for="checkbox8">
                                    Info
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-circle">
                                <input id="checkbox-9" type="checkbox">
                                <label for="checkbox-9">
                                    Primary
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Success
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning checkbox-circle">
                                <input id="checkbox-11" type="checkbox">
                                <label for="checkbox-11">
                                    Warning
                                </label>
                            </div>
                            <div class="checkbox checkbox-danger checkbox-circle">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Danger
                                </label>
                            </div>

                            <div class="checkbox checkbox-dark checkbox-circle">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Dark
                                </label>
                            </div>


                            <p class="text-muted font-13 m-b-15 m-t-20">Checkboxes without label text <code>.checkbox-single</code></p>
                            <div class="checkbox checkbox-single checkbox-circle">
                                <input type="checkbox" id="singleCheckbox11" value="option1" aria-label="Single checkbox One">
                                <label></label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-single checkbox-circle">
                                <input type="checkbox" id="singleCheckbox21" value="option2" checked aria-label="Single checkbox Two">
                                <label></label>
                            </div>


                            <p class="text-muted font-13 m-b-15 m-t-20">Inline checkboxes</p>
                            <div class="checkbox checkbox-inline checkbox-circle">
                                <input type="checkbox" id="inlineCheckbox11" value="option1">
                                <label for="inlineCheckbox11"> Inline One </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline checkbox-circle">
                                <input type="checkbox" id="inlineCheckbox21" value="option1" checked>
                                <label for="inlineCheckbox21"> Inline Two </label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-inline checkbox-circle">
                                <input type="checkbox" id="inlineCheckbox31" value="option1">
                                <label for="inlineCheckbox31"> Inline Three </label>
                            </div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="m-b-20">

                            <h5>Disabled</h5>

                            <p class="text-muted font-13 m-b-15">
                                Disabled state also supported.
                            </p>

                            <div class="checkbox">
                                <input id="checkbox9" type="checkbox" disabled>
                                <label for="checkbox9">
                                    Can't check this
                                </label>
                            </div>
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox10" type="checkbox" disabled checked>
                                <label for="checkbox10">
                                    This too
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning checkbox-circle">
                                <input id="checkbox110" type="checkbox" disabled checked>
                                <label for="checkbox110">
                                    And this
                                </label>
                            </div>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox12" type="checkbox" disabled checked>
                                <label for="checkbox12">
                                    Can't check this
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox13" type="checkbox" disabled checked>
                                <label for="checkbox13">
                                    This too
                                </label>
                            </div>
                            <div class="checkbox checkbox-danger checkbox-circle">
                                <input id="checkbox14" type="checkbox" disabled checked>
                                <label for="checkbox14">
                                    And this
                                </label>
                            </div>

                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="m-b-20">

                            <h5>Basic</h5>

                            <p class="text-muted font-13 m-b-15">
                                Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                            </p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <input type="radio" name="radio" id="radio1" value="option1" checked>
                                        <label for="radio1">
                                            Default
                                        </label>
                                    </div>
                                    <div class="radio radio-custom">
                                        <input type="radio" name="radio" id="radio03" value="option3">
                                        <label for="radio03">
                                            Custom
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="radio" id="radio3" value="option3">
                                        <label for="radio3">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="radio radio-success">
                                        <input type="radio" name="radio" id="radio4" value="option4">
                                        <label for="radio4">
                                            Success
                                        </label>
                                    </div>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio" id="radio5" value="option5">
                                        <label for="radio5">
                                            Info
                                        </label>
                                    </div>
                                    <div class="radio radio-danger">
                                        <input type="radio" name="radio" id="radio6" value="option6">
                                        <label for="radio6">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="radio radio-warning">
                                        <input type="radio" name="radio" id="radio7" value="option7">
                                        <label for="radio7">
                                            Warning
                                        </label>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-sm-6">
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio11" value="option1" checked>
                                        <label for="radio11">
                                            Default
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="radio3" id="radio13" value="option3">
                                        <label for="radio13">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="radio radio-success">
                                        <input type="radio" name="radio4" id="radio14" value="option4" checked>
                                        <label for="radio14">
                                            Success
                                        </label>
                                    </div>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio5" id="radio15" value="option5" checked>
                                        <label for="radio15">
                                            Info
                                        </label>
                                    </div>
                                    <div class="radio radio-danger">
                                        <input type="radio" name="radio6" id="radio16" value="option6">
                                        <label for="radio16">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="radio radio-warning">
                                        <input type="radio" name="radio7" id="radio17" value="option7" checked>
                                        <label for="radio17">
                                            Warning
                                        </label>
                                    </div>

                                </div><!-- end col -->

                            </div>
                            <!-- end row -->


                            <p class="text-muted font-13 m-b-15 m-t-20">Radios without label text <code>.radio-single</code></p>
                            <div class="radio radio-single">
                                <input type="radio" id="singleRadio1" value="option1.1" name="radioSingle1" aria-label="Single radio One">
                                <label></label>
                            </div>
                            <div class="radio radio-success radio-single">
                                <input type="radio" id="singleRadio2" value="option2.1" name="radioSingle1" checked aria-label="Single radio Two">
                                <label></label>
                            </div>


                            <p class="text-muted font-13 m-b-15 m-t-20">Inline radios</p>
                            <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                <label for="inlineRadio1"> Inline One </label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked>
                                <label for="inlineRadio2"> Inline Two </label>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6">
                        <div class="m-b-20">

                            <h5>Disabled</h5>

                            <p class="text-muted font-13 m-b-15">
                                    Disabled state also supported.
                            </p>

                            <div class="radio radio-danger">
                                <input type="radio" name="radio31" id="radio51" value="option1" checked disabled>
                                <label for="radio51">
                                    Next
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio41" id="radio61" value="option2" checked disabled>
                                <label for="radio61">
                                    One
                                </label>
                            </div>
                            <div class="radio radio-info">
                                <input type="radio" name="radio61" id="radio81" value="option4" checked disabled>
                                <label for="radio81">
                                    One
                                </label>
                            </div>

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- end container -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pull-right hidden-xs">
                        Project Completed <strong class="text-custom">43%</strong>.
                    </div>
                    <div>
                        <strong>Simple Admin</strong> - Copyright &copy; 2017
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end footer -->

</div>
<!-- End #page-right-content -->

<div class="clearfix"></div>

</div>
<!-- end .page-contentbar -->
</div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

    </body>
</html>