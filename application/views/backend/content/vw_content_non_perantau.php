<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo $info;
}
?>
<div class="page-contentbar">
    <div id="page-right-content">
        <div class="container">
        <!-- <div class="bootstrap-filestyle input-group">
            <span class="group-span-filestyle " tabindex="0">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-plus">
                </span> 
            <span class="buttonText">Tambah Data</span></label></span>
        </div> -->
</br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>perantau/saveDataPerantau" class="form-validation" method="POST">
                        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">NIK / KTP<span class="text-danger">*</span></label>
                            <input type="number" name="nik" parsley-trigger="change" required placeholder="Masukan 16 digit nomor ktp" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" name="nama_lengkap" parsley-trigger="change" required placeholder="Masukan nama lengkap" class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenkel" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div>
                            <div class="input-group">
                                <input name="ttl" type="text" class="form-control" placeholder="bulan/tanggal/tahun" id="datepicker-autoclose">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Rt<span class="text-danger">*</span></label>
                        <input type="number" name="rt" parsley-trigger="change" required placeholder="RT" class="form-control" autocomplete="off">
                    </div>
                </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Rw<span class="text-danger">*</span></label>
                            <input type="number" name="rw" parsley-trigger="change" required placeholder="RW" class="form-control" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Dusun<span class="text-danger">*</span></label>
                            <input type="text" name="dusun" parsley-trigger="change" required placeholder="Dusun" class="form-control" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kelurahan<span class="text-danger">*</span></label>
                            <input type="text" name="kelurahan" parsley-trigger="change" required value="Pujotirto" class="form-control" readonly>
                        </div>
                    </div>
            
                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kecamatan<span class="text-danger">*</span></label>
                            <input type="text" name="kecamatan" value="Karang Sambung" parsley-trigger="change" required  class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kabupaten<span class="text-danger">*</span></label>
                            <input type="text" name="kabupaten" value="Kebumen" parsley-trigger="change" required class="form-control" readonly>
                        </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Nomor Telf<span class="text-danger">*</span></label>
                        <input type="number" name="no_telf" parsley-trigger="change" required placeholder="Masukan 12 digit nomor telf" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tanggal Sakit</label>
                        <div>
                            <div class="input-group">
                                <input name="tanggal_sakit" type="text" class="form-control" placeholder="bulan/tanggal/tahun" id="datepicker">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Karantina</label>
                        <div>
                            <div class="input-group">
                            <input class="form-control input-daterange-datepicker" type="text" name="daterange"/>
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="userName">Keterangan sakit<span class="text-danger"></span></label>
                        <textarea class="form-control" rows="5" name="keterangan" placeholder="Ketik gejala sakit disini..." autocomplete="off"></textarea>                    
                    </div>
                </div>

            </div>
                        
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Simpan
                </button>
            </div>
                </form>
        </div>  
    </div>
    </div>
</div>
