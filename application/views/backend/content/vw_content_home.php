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
                <?php foreach($getPositif as $row3){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Positif</center></h4><hr>
                    <h2 class="m-b-20"><font color="blue"><center><?php echo $row3->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>

            <div class="col-sm-3">
            <?php foreach($getSembuh as $row4){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Sembuh</center></h4><hr>
                    <h2 class="m-b-20"><font color="green"><center><?php echo $row4->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
            <?php }?>
            </div>

            <div class="col-sm-3">
                <?php foreach($getMeninggal as $row5){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Meninggal</center></h4><hr>
                    <h2 class="m-b-20"><font color="red"><center><?php echo $row5->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>

            <div class="col-sm-3">
                <?php foreach($getPemudik as $row2){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Pemudik</center></h4><hr>
                    <h2 class="m-b-20"><font color="#ffcc00"><center><?php echo $row2->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
            <div class="col-sm-6">
                <?php foreach($getODP as $row){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total ODP</center></h4><hr>
                    <h2 class="m-b-20"><font color="#804d00"><center><?php echo $row->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
            <div class="col-sm-6">
                <?php foreach($getPDP as $row1){?>
                <div class="card-box card">
                    <a href="#" class="btn btn-sm btn-default pull-right">View</a>
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total PDP</center></h4><hr>
                    <h2 class="m-b-20"><font color="#993300"><center><?php echo $row1->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
            <!-- <div class="col-sm-6">
                <?php foreach($getDataKarantinaSelesai as $row){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total ODP <p> Selesai Karantina</p></center></h4><hr>
                    <h2 class="m-b-20"><font color="#804d00"><center><?php echo $row->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
            <div class="col-sm-6">
                <?php foreach($getDataMasihKarantina as $row){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total ODP <p> Masih Karantina</p></center></h4><hr>
                    <h2 class="m-b-20"><font color="#804d00"><center><?php echo $row->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
        </div> -->
                        <!-- end row -->

    <div class="row">

        <div class="col-lg-12">
            <div class="card-box card">
                <h4 class="m-t-0">Analisa Pemudik</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Pemudik</h5>
                        </li>
                       
                    </ul>
                </div>
                <div id="chart_pemudik_" style="height: 300px;"></div>
            </div>
        </div> 

        <!-- end col -->

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