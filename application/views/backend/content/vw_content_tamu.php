<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo $info;
}
?>
<div class="page-contentbar">
    <div id="page-right-content">
        <div class="container"></br>

    <div class="row">
<div class="col-lg-12">
    <div class="card-box card">
        <div class="m-b-20 table-responsive">
           <div class="bootstrap-filestyle input-group">
            <span class="group-span-filestyle " tabindex="0">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-plus">
                </span> 
            <span class="buttonText" id="show">Tambah Data</span></label></span>
        </div></br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nik/Ktp</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telf</th>
                    <th>Kota</th>
                    <th>Nama Tujuan</th>
                    <th>Tujuan Berkunjung</th>
                    <th>Lama Berkunjung</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($dataTamu as $row){?>
                <tr>
                    <td><?php echo $row->id_tamu; ?></td>
                    <td><?php echo $row->nik; ?></td>
                    <td><?php echo $row->nama_lengkap; ?></td>
                    <td><?php echo $row->nomor_hp_tamu; ?></td>
                    <td><?php echo $row->kabupaten_tamu; ?></td>
                    <td><?php echo $row->nama_tujuan; ?></td>
                    <td><?php echo $row->tujuan_berkunjung; ?></td>
                    <td><?php echo $row->lama_berkunjung; ?></td>
                    <td><?php echo $row->created_date; ?></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12 form_tamu" style="display: none;">
            <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>perantau/saveDataTamu" class="form-validation" method="POST">
                        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">NIK / KTP<span class="text-danger"></span></label>
                            <input type="number" name="nik" parsley-trigger="change" placeholder="Masukan 16 digit nomor ktp" class="form-control" onKeyPress="if(this.value.length==16) return false;" min="0" autocomplete="off">
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
                        <label for="userName">Nomor Telf<span class="text-danger">*</span></label>
                        <input type="number" name="nomor_hp_tamu" parsley-trigger="change" required placeholder="Masukan 12 digit nomor telf" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="userName">Rt<span class="text-danger">*</span></label>
                        <input type="number" name="rt_tamu" parsley-trigger="change" required placeholder="RT" class="form-control" autocomplete="off">
                    </div>
                </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Rw<span class="text-danger">*</span></label>
                            <input type="number" name="rw_tamu" parsley-trigger="change" required placeholder="RW" class="form-control" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Dusun<span class="text-danger">*</span></label>
                            <input type="text" name="dusun_tamu" parsley-trigger="change" required placeholder="Dusun" class="form-control" autocomplete="off">
                        </div>
                    </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kelurahan<span class="text-danger">*</span></label>
                            <input type="text" name="kelurahan_tamu" parsley-trigger="change" required class="form-control" placeholder="Kelurahan">
                        </div>
                    </div>
            
                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kecamatan<span class="text-danger">*</span></label>
                            <input type="text" name="kecamatan_tamu" parsley-trigger="change" required  class="form-control" placeholder="Kecamatan">
                        </div>
                </div>

                <div class="col-lg-3">
                        <div class="form-group">
                            <label for="userName">Kabupaten/Kota<span class="text-danger">*</span></label>
                            <input type="text" name="kabupaten_tamu" parsley-trigger="change" required class="form-control" placeholder="Kabupaten/Kota">
                        </div>
                </div>

                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Tujuan<span class="text-danger">*</span></label>
                            <input type="text" name="nama_tujuan" parsley-trigger="change" required class="form-control" placeholder="Nama orang yang dituju">
                        </div>
                </div>

                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Lama Berkunjung<span class="text-danger">*</span></label>
                            <input type="text" name="lama_berkunjung" parsley-trigger="change" required class="form-control" placeholder="Contoh : 2 hari">
                        </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="userName">Tujuan Berkunjung<span class="text-danger"></span></label>
                        <textarea class="form-control" rows="5" name="tujuan_berkunjung" placeholder="Ketik tujuan disini.." autocomplete="off"></textarea>                    
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



