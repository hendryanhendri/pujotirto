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
        <!-- <div class="col-sm-12">
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
        </div> -->
</div>
</div> 