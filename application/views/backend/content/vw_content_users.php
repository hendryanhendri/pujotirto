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
            <span class="buttonText">Tambah Data</span></label></span>
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

</div>

