<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Covid19 | Pujotirto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo  base_url(); ?>assets/images/favicon.ico">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo  base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo  base_url(); ?>assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo  base_url(); ?>assets/css/style.css" rel="stylesheet">
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
                    <h1 class="header-title m-t-0 m-b-20 card"><center style="padding-bottom: 10px;  padding-top: 10px;"><img src="<?php echo base_url();?>gambar/kebumen.png" width="150px" height="100px" style="display: block; margin: auto;">DESA PUJOTIRTO</center></h1><hr> 
                    <h4><center>KAWAL CORONA</center></h4>
                    <marquee width="100%" height="40" direction="left"><font color="red"><p><b>Untuk pemudik diharapkan jangan mudik terlebih dahulu, sayangi keluarga anda !</b></p></font></marquee>
                    <hr>

                </div>
            </div> <!-- end row -->

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
    </div> <!-- end row -->


<div class="row">
    <div class="col-sm-6">
        <div class="card-box card">
            <h4 class="m-t-0">PROSEDUR PEMUDIK</h4>
            <center><div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;zoom&quot;:0.5,&quot;toolbar&quot;:&quot;layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2020-04-07T18:15:58.239Z\&quot; agent=\&quot;5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36\&quot; etag=\&quot;2hDmivyPkGBtTnuJTpKd\&quot; version=\&quot;12.9.9\&quot; type=\&quot;google\&quot;&gt;&lt;diagram name=\&quot;Page-1\&quot; id=\&quot;97916047-d0de-89f5-080d-49f4d83e522f\&quot;&gt;7Vpbe6I6FP01Ps58XBTkMUepWhH5BKbT84YalTNoPBhbnV9/EhJEEC/1ypy2D5WsXNnJWnsnoSTXpqtG6M0nHTSEQUkShquSXC9JkljVJPJDkTVHJKnKkHHoDzmWALb/G3JQ4OjSH8JFqiBGKMD+PA0O0GwGBziFeWGI3tPFRihI9zr3xnAHsAdeEKPfKwn+4g/xhOOioiUZTeiPJ7zzqqSyjL43+DUO0XLGeyxJ8ij6Y9lTL26Lv+pi4g3R+xYk6yW5FiKE2dN0VYMBNW9sOFbvaU/u5n1COMOnVGgEHcEV5kJ/OJbX/bYw+q1K3yoKHxxexyaBQ2IhnkQhnqAxmnmBnqB/RS8NabMCSSVlDITmBBQJ+A/EeM2n21tiRKAJngY8l5hiTnNGAVwBOosEG/lBUEMBCqNRyEMPVkcDWhaH6BfcylEGVdgfkRw2cjrcvRbh0AItwwE8ZIbKZkLIWodoCnG4JhVDGHjYf0t34PE1N96U21S1kE+6lgROEFXgcx/TQxXSTWAvHEPMayVzRx62hpFA0Yx+ZHb54n7zgiWMV6kSYGpuRLtUxjgyJMP6WYAV2locyr9LFGd8W0TTC0gBWZmvksxsK8sYaMUIeZllthTBcscUZpHF3JudMiipnDcoSzfrwAFmo0TpsumaNZr79oPN0kvaIkyXyd82dO6A6qBH7CIYLuiRH1Nv6FGaroUN2u46tIGXlgFeQZM8We5z12n1nG5cco8Nhfu+y99dk2Z29B4d5cF5JfDOctspmlGmtO68T3wM7bkXEfud+Ke0xpyrJ28wxHB1WFF2hSKuIKUJX+XJ98SzyLHrm2w5FbEq7NeWlCp8WAKqZwh8nj5fLPqPFXj1JgIvStqDFV4tlsIXQeINou62Gym85RpM6tt6z+1QUaoVRffboAdMp8UEE5j1ViT7tm6ADoXEMvnXjHzDJ9TRbOD0eB1V5C8dpXrDd0VM1g7ZS7pQcC/zelrBZPFLF7908SrxpVY4YZSKRbUfV2HaqaMSq3mjem61aabTqoM2+QV1EFHNcJvAZFRzdAdY5Jcsb8Y/smkynwFhJV3Y3pQutll/MT+bftcm0x/CMdo395yURzfhnCI8nnTlHNJlLJ0XfMDZkD/WB4G3WPiDe8UWu+bdsl4lx3gxdukOrVxOz165rKXbYDHPzg5ttyVBPNLSjfd6yjlntf+/EFS5zVltWc7MbuW+O3nlwrPaU2PDE/3oMTeaFyBeO2DlbjTjPj84hAI6qRtskGXl8T6pMCeNxIbh+iet/70SJ195c1Givkql1jz1WFlTT91ZazfRP0mtpFaUKt5Z/y48yby2/h3bsd9DAA/uEs6827n2xuAzq3D2uqcAKqyKO3b8lEHiqeeUqpA/w/c5p1QuPKe8uugVQfWA2WiwC28a84Fegz4awOrSq3BL7+i9lulEaljXbVCK78ot3XEbwI6q2XqTXvKX0jflHSJvhhsJXYeUe3ohlZ8c3bC+5CxXzpTy4+Vs91zj4UFlKqRMIsw9QeUVRS2+Wz4uavJNQkQle9kt3DlGjA1QHLksgl62u6btGg6wW5Ekmg0mfLlymEgg0z2hVLnogDm/l/jguxN/bEU7tMgAdXOfWlZof7nn3l+inCKdJj1elOVC0fDnVTh46o3PwaOqhk53ZxfuzTqUwtEXdIRU5F+t+6NVF7W9S1oA7Yh17Jxsi5FN13bpwyu766Xcb9vA5MUt3QRUK6IE3fmZz65jvoIjW74/gnc3uAbKOj8t7xZIy+Hh5gPwD/CQJJMPw5n3TD7Al/X/AA==&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div></center>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card-box card">
            <h4 class="m-t-0">CONTACT PERSON</h4></br>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default panel-fill">
                    <div class="panel-heading">
                        <h3 class="panel-title">PELAPORAN DAN INFORMASI</h3>
                    </div>
                    <div class="panel-body">
                        <div class="m-b-20">
                            <strong>Bp Giriyanto</strong>
                            <p class="text-muted"><a href="https://wa.me/+6281804777678?" target="_blank"><i class="mdi mdi-whatsapp"></i> 0818-0477-7678</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Bp Tofikun</strong>
                            <p class="text-muted"><a href="https://wa.me/+6282133965595" target="_blank"><i class="mdi mdi-whatsapp"></i> 0821-3396-5595</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default panel-fill">
                    <div class="panel-heading">
                        <h3 class="panel-title">KESEHATAN DAN KONSULTASI</h3>
                    </div>
                    <div class="panel-body">
                        <div class="m-b-20">
                            <strong>Ibu Widyati</strong>
                            <p class="text-muted"><a href="https://wa.me/+6287837872754" target="_blank"><i class="mdi mdi-whatsapp"></i> 0878-3787-2754</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Ibu Susan</strong>
                            <p class="text-muted"><a href="https://wa.me/+6285385366372" target="_blank"><i class="mdi mdi-whatsapp"></i> 0853-8536-6372</p></a>
                        </div><hr>
                        <div class="m-b-20">
                            <strong>Bp Sutik</strong>
                            <p class="text-muted"><a href="https://wa.me/+6281393750430" target="_blank"><i class="mdi mdi-whatsapp"></i> 0813-9375-0430</p></a>
                        </div>
                    </div>
                </div>
            </div>

         </div>
        </div>
    </div>
</div>

</div>
<!-- end container -->

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

    </div>
    <!-- End #page-right-content -->

    <div class="clearfix"></div>

</div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->

        <script type="text/javascript" src="https://app.diagrams.net/js/viewer.min.js"></script>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo  base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo  base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo  base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo  base_url(); ?>assets/plugins/morris/morris.min.js"></script>
		<script src="<?php echo  base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="<?php echo  base_url(); ?>assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="<?php echo  base_url(); ?>assets/js/jquery.app.js"></script>

    </body>
</html>