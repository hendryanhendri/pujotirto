<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Covid19 | Pujotirto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>gambar/covid.png">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

          <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/plugins/morris/morris.css">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  border-color: #089ce4;
}

.container {
  padding: 2px 16px;
} 
</style>
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
                            <a href="<?php echo base_url(); ?>home">
                                <span><i class="ti-home"></i></span><span> Home </span> </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><span><i class="ti-cloud-up"></i></span><span> Penambahan Data</span> </a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url();?>">Data Perantau</a></li>
                                <li><a href="<?php echo base_url();?>">Data Warga Sakit</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="ti-settings"></i></span><span>Pengaturan</span> </a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url();?>">Tambah Pengguna</a></li>
                                <li><a href="<?php echo base_url();?>">Ubah Text Berjalan</a></li>
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
                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>gambar/user.png" alt="user-img" class="img-circle"> </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="ti-user m-r-10"></i> <?php echo $this->session->userdata('fullname') ?></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>login/getLogout"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- end container -->
</div> <!-- end navbar -->
</div>
<!-- Top Bar End -->


<!-- START PAGE CONTENT -->
<div class="page-contentbar">
    <!-- START PAGE CONTENT -->
    <div id="page-right-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="header-title m-t-0 m-b-20 card"><center style="padding-bottom: 10px;  padding-top: 10px;"><img src="<?php echo base_url();?>gambar/kebumen.png" width="150px" height="100px" style="display: block; margin: auto;">DESA PUJOTIRTO</center></h1><hr> 
                    <h4><center>KAWAL CORONA</center></h4>
                    <marquee width="100%" height="40" direction="left"><font color="red"><p><b>Untuk pemudik diharapkan jangan mudik terlebih dahulu, sayangi keluarga anda !</b></p></font></marquee>
                    <hr>
                </div>
        </div> <!-- end row --></br>
            
        <div class="row">
            <div class="col-sm-3">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Positif</center></h4><hr>
                    <h2 class="m-b-20"><font color="blue"><center>0</font> <h5>Orang<h5></center></h2>
                </div>

            </div>

            <div class="col-sm-3">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Sembuh</center></h4><hr>
                    <h2 class="m-b-20"><font color="green"><center>0</font> <h5>Orang<h5></center></h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Meninggal</center></h4><hr>
                    <h2 class="m-b-20"><font color="red"><center>0</font> <h5>Orang<h5></center></h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Pemudik</center></h4><hr>
                    <h2 class="m-b-20"><font color="#ffcc00"><center>10</font> <h5>Orang<h5></center></h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total ODP</center></h4><hr>
                    <h2 class="m-b-20"><font color="#804d00"><center>10</font> <h5>Orang<h5></center></h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total PDP</center></h4><hr>
                    <h2 class="m-b-20"><font color="#993300"><center>0</font> <h5>Orang<h5></center></h2>
                </div>
            </div>
        </div>
                        <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card-box card">
                <h4 class="m-t-0">Total Revenue</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Series A</h5>
                        </li>
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-bar-stacked" style="height: 300px;"></div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box card">
                <h4 class="m-t-0">Analisa Pemudik</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Mobiles</h5>
                        </li>
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Tablets</h5>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-line-chart" style="height: 300px;"></div>
            </div>
        </div> <!-- end col -->
        <div class="col-sm-12">
            <div class="card-box card">
        <?php 
            foreach($get_data_covid as $row){?>
            <div class="alert-secondary" role="alert">
            <center>
            <h3><b>Update Corona Virus <?php echo $row->name;?></b></h3><hr>
            <p><b>Positif</b>    : <span class="badge badge-primary"><?php echo $row->positif;?></span> | 
                <b>Sembuh   </b>  : <span class="badge badge-success"><?php echo $row->sembuh;?> </span> | 
                <b>Meninggal</b>  : <span class="badge badge-danger"><?php echo $row->meninggal;?></span></p>
                <p>Source data : <a href="https://kawalcorona.com" target="_blank" style="text-decoration:none;">kawalkorona.com</a></p>
            </center>
            </div>
        <?php }?>
            </div>
        </div>
</div>
    </div> <!-- end row -->

    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pull-right hidden-xs">
                            Pujotirto <strong class="text-custom"></strong>
                        </div>
                        <div>
                            <strong>belajarbarengseru.com</strong> - Copyright &copy; 2020
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end footer -->

<div class="clearfix"></div>

</div>
<!-- end .page-contentbar -->
</div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

         <!--Morris Chart-->
		<script src="<?php echo  base_url(); ?>assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo  base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="<?php echo  base_url(); ?>assets/pages/jquery.dashboard.js"></script>


        <!-- App Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

    </body>
</html>