<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8" />
<title>Covid19 | Pujotirto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="CMS | Covid19 | DesaPujotirto" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="<?php echo base_url(); ?>gambar/covid.png">

    <!-- Summernote css -->
    <link href="<?php echo base_url(); ?>assets/plugins/summernote/summernote.css" rel="stylesheet" />


<!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Icons CSS -->
<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!--Morris Chart CSS -->
<link rel="stylesheet" href="<?php echo  base_url(); ?>assets/plugins/morris/morris.css">


    <!-- Plugins css-->
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css">
<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- DataTables -->
<link href="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        

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
                                <li><a href="<?php echo base_url();?>perantau/add_perantau">Data ODP</a></li>
                                <li><a href="<?php echo base_url();?>perantau/add_non_perantau">Data PDP</a></li>
                                <li><a href="<?php echo base_url();?>perantau/add_data_tamu">Data Tamu</a></li>
                                <li><a href="<?php echo base_url();?>home/master_data">Master Data</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="ti-settings"></i></span><span>Pengaturan</span> </a>
                            <ul class="submenu">
                                <li><a href="<?php echo base_url();?>add_users">Tambah Pengguna</a></li>
                                <li><a href="<?php echo base_url();?>home/histori_aktifitas">Histori Aktifitas</a></li>
                                <li><a href="<?php echo base_url();?>home/text_berjalan">Ubah Text Berjalan</a></li>
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

<?php $this->load->view($content);?>

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

<script src="<?php echo  base_url(); ?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
<script type="text/javascript" src="<?php echo  base_url(); ?>assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="<?php echo  base_url(); ?>assets/plugins/moment/moment.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo  base_url(); ?>assets/plugins/summernote/summernote.min.js"></script>

<!-- form advanced init js -->
<script src="<?php echo  base_url(); ?>assets/pages/jquery.form-advanced.init.js"></script>

<!-- Datatable js -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<!-- init -->
<script src="<?php echo base_url(); ?>assets/pages/jquery.datatables.init.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.form-validation').parsley();
    $('.summernote').summernote({
        height: 350,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: false                 // set focus to editable area after initializing summernote
    });
});
</script>
<script type="text/javascript">
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 4000);
</script>

<script>
$(document).ready(function(){
    $('#show').click(function() {
      $('.form_tamu').toggle("slide");
    });

    $('#show_div_users').click(function() {
      $('.form_users').toggle("slide");
      $('#form_update_users').hide();
    });

    $('#show_div_odp').click(function() {
      $('.form_odp').toggle("slide");
      $('#form_update_pdp').hide();
    });

    $('#show_div_pdp').click(function() {
      $('.form_pdp').toggle("slide");
    });

});
</script>


<script>
function EditUsers(id){
    save_method = 'update';
    $('#form_update_users').toggle("slide");
    $('.form_users').hide();

    $.ajax({
        url:"<?php echo site_url('add_users/ajax_edit'); ?>/"+ id,
        type:"GET",
        dataType: "JSON",
        success:function(data)
        {
            $('[name="id_users"]').val(data.id_users);
            $('[name="username"]').val(data.username);
            $('[name="fullname"]').val(data.fullname);
            $('[name="email"]').val(data.email);
            $('[name="phone"]').val(data.phone);
            $('[name="jenkel"]').val(data.jenkel);
        },
        error : function (jqXHR, textStatus, errorThrown)
        {
        alert('Error get data from ajax');
      }

    });

}


function DeleteUsers(id){
    if(confirm('Anda yakin akan menghapus data ini.?')){
        $.ajax({
            url : "<?php echo site_url('add_users/ajax_delete'); ?>/"+id,
            type: "POST",
            dataType: "JSON",
            success:function(data){
                window.location = "<?php echo base_url(); ?>add_users"
            },
            error:function(jqXHR, textStatus, errorThrown)
            {
                alert('Error penghapusan data')
            }

        });
        
    }

}

function EditOdp(id){
    save_method = 'update';
    $('#form_update_pdp').toggle("slide");
    $('.form_odp').hide();

    $.ajax({
        url:"<?php echo site_url('perantau/ajax_edit'); ?>/"+ id,
        type:"GET",
        dataType: "JSON",
        success:function(data)
        {
            $('[name="nik"]').val(data.nik);
            $('[name="nama_lengkap"]').val(data.nama_lengkap);
            $('[name="jenkel"]').val(data.jenkel);
            $('[name="ttl"]').val(data.ttl);
            $('[name="rt"]').val(data.rt);
            $('[name="rw"]').val(data.rw);
            $('[name="dusun"]').val(data.dusun);
            $('[name="kelurahan"]').val(data.kelurahan);
            $('[name="kecamatan"]').val(data.kecamatan);
            $('[name="kabupaten"]').val(data.kabupaten);
            $('[name="no_telf"]').val(data.no_telf);
            $('[name="tanggal_pulang"]').val(data.tanggal_pulang);
            $('[name="start_karantina"]').val(data.start_karantina);
            $('[name="finish_karantina"]').val(data.finish_karantina);
            $('[name="kota_perantau"]').val(data.kota_perantau);
            $('[name="keterangan"]').val(data.keterangan);

        },
        error : function (jqXHR, textStatus, errorThrown)
        {
        alert('Error get data from ajax');
      }

    });

}
</script>
    </body>
</html>