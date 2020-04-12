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
            <span class="group-span-filestyle" tabindex="0">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-plus">
                </span> 
            <span class="buttonText" id="show_div_users">Tambah Data</span></label></span>
            <a href="<?php echo base_url();?>add_users"><span class="group-span-filestyle " tabindex="0">
                <label for="filestyle-1" class="btn btn-default ">
                    <span class="icon-span-filestyle glyphicon glyphicon-refresh">
                </span> 
            <span class="buttonText">Reload</span></label></span></a>
        </div></br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id Users</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>level</th>
                    <th>Email</th>
                    <th>No Telf</th>
                    <th>Pengaturan</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($getUsers as $row){?>
                <tr>
                    <td><?php echo $row->id_users; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->fullname; ?></td>
                    <td><?php echo $row->level; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <td><button type="button" class="btn btn-sm btn-info" onclick="EditUsers('<?php echo $row->id_users; ?>')">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="DeleteUsers('<?php echo $row->id_users; ?>')">Hapus</button></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12 form_users" style="display: none;">
            <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>add_users/saveDataUsers" class="form-validation" method="POST">
                        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger"></span></label>
                            <input type="text" name="fullname" parsley-trigger="change" placeholder="Nama Lengkap" class="form-control"  autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Username<span class="text-danger">*</span></label>
                            <input type="text" name="username" parsley-trigger="change" required placeholder="Username" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" parsley-trigger="change" required placeholder="Minimal 8 digit" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nomor Tel<span class="text-danger">*</span></label>
                            <input type="number" name="phone" parsley-trigger="change" required placeholder="Nomor Hp" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" parsley-trigger="change" required placeholder="Email" class="form-control" autocomplete="off">
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

    <div class="col-lg-12" id="form_update_users" style="display: none;">
            <div class="card-box card">
                <div class="p-20 m-b-20">
                    <form action="<?php echo base_url(); ?>add_users/updateDataUsers" class="form-validation" method="POST">
                        
            <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Id Users<span class="text-danger"></span></label>
                            <input type="text" name="id_users" parsley-trigger="change" class="form-control" readonly autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nama Lengkap<span class="text-danger"></span></label>
                            <input type="text" name="fullname" parsley-trigger="change" placeholder="Nama Lengkap" class="form-control"  autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Username<span class="text-danger">*</span></label>
                            <input type="text" name="username" parsley-trigger="change" required placeholder="Username" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Nomor Tel<span class="text-danger">*</span></label>
                            <input type="number" name="phone" parsley-trigger="change" required placeholder="Nomor Hp" class="form-control" onKeyPress="if(this.value.length==12) return false;" min="0" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="userName">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required placeholder="Email" class="form-control" autocomplete="off">
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

            </div>
                        
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Update
                </button>
            </div>
                </form>
        </div>  
    </div>

</div>

