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
            <div class="col-sm-4">
                <?php foreach($getPositif as $row3){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Positif</center></h4><hr>
                    <h2 class="m-b-20"><font color="blue"><center><?php echo $row3->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>

            <div class="col-sm-4">
            <?php foreach($getSembuh as $row4){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Sembuh</center></h4><hr>
                    <h2 class="m-b-20"><font color="green"><center><?php echo $row4->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
            <?php }?>
            </div>

            <div class="col-sm-4">
                <?php foreach($getMeninggal as $row5){?>
                <div class="card-box card">
                    <!-- <a href="#" class="btn btn-sm btn-default pull-right">View</a> -->
                    <h4 class="text-muted m-t-0 text-uppercase"><center>Total Meninggal</center></h4><hr>
                    <h2 class="m-b-20"><font color="red"><center><?php echo $row5->total; ?></font> <h5>Orang<h5></center></h2>
                </div>
                <?php }?>
            </div>
     
        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Total Pemudik</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-20 text-center color-yellow">

                    <?php foreach($getPemudik as $row2){?>
                       <font color="#ffcc00"><?php echo $row2->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Orang</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">
                    

                <?php foreach($getTotalPerRw as $row){?>
                <div class="col-xs-2">
                    <h4 class="f-size-sm h4 font-weight-bold mt-1 mb-0 text-center color-black">
                        <span class="">RW <?php echo $row->rw; ?></span></h4>
                    <h4 class="mt-0 mb-1 text-md text-center">
                    <font color="black"><?php echo $row->total; ?></font> <hr>
                    </h4>
                </div>
                <?php }?>


                    </div>
                </div>
            </div>
        </div>
            
        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Orang Dalam Pengawasan (ODP)</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                    <?php foreach($getODP as $row){?>
                    <font color="black"><?php echo $row->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Total ODP</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">
                    <?php foreach($getDataMasihKarantina as $row){?>
                        <div class="col-xs-6">
                            <h2 class="f-size-sm h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                            <font color="red"><?php echo $row->total; ?></font> </h2></h2>
                            <p class="mt-0 mb-1 text-md text-center">
                                <span class="">Dalam Karantina</span>
                            </p>
                        </div>
                    <?php }?>

                    <?php foreach($getDataKarantinaSelesai as $row){?>
                        <div class="col-xs-6">
                            <h2 class="f-size-sm h2 font-weight-bold mt-1 mb-0 text-center color-yellow">
                            <font color="green"><?php echo $row->total; ?></font> </h2></h2>
                            <p class="mt-0 mb-1 text-md text-center">
                                <span class="">Selesai Karantina</span>
                            </p>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="card-box card">
                <div class="card-body">
                <h4 class="card-title text-uppercase mb-0 text-center">Pasien Dalam Pantauan (PDP)</h4>
                    <h2 class="h2 font-weight-bold mt-1 mb-20 text-center color-yellow">

                    <?php foreach($getPDP as $row1){?>
                       <font color="#ffcc00"><?php echo $row1->total; ?></font> </h2>
                    <?php }?>
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                    </div>
                    <p class="mt-3 mb-0 text-md text-center">
                        <span class="text-nowrap">Orang</span>
                    </p><hr>
                    <center>
                    <div class="row border-top">
                    

                <?php foreach($getTotalPerRwPdp as $row){?>
                <div class="col-xs-2">
                    <h4 class="f-size-sm h4 font-weight-bold mt-1 mb-0 text-center color-black">
                        <span class="">RW <?php echo $row->rw; ?></span></h4>
                    <h4 class="mt-0 mb-1 text-md text-center">
                    <font color="black"><?php echo $row->total; ?></font> <hr>
                    </h4>
                </div>
                <?php }?>


                    </div>
                </div>
            </div>
        </div>
        
    </div>
                    <!-- end row -->

    <div class="row">

        <div class="col-lg-12">
            <div class="card-box card">
                <h4 class="m-t-0">Grafik Pemantau Pemudik</h4>
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