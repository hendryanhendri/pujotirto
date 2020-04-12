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
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nik/Ktp</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telf</th>
                    <th>Rw</th>
                    <th>Rt</th>
                    <th>Dusun</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Status</th>
                    <th>Status Karantina</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($getMasterData as $row){?> 
                <tr>
                    <td><?php echo $row->nik; ?></td>
                    <td><?php echo $row->nama_lengkap; ?></td>
                    <td><?php echo $row->jenkel; ?></td>
                    <td><?php echo $row->no_telf; ?></td>
                    <td><?php echo $row->rw; ?></td>
                    <td><?php echo $row->rt; ?></td>
                    <td><?php echo $row->dusun; ?></td>
                    <td><?php echo $row->kelurahan; ?></td>
                    <td><?php echo $row->kecamatan; ?></td>
                    <td><?php echo $row->kabupaten; ?></td>
                    <?php if($row->status_ == 'ODP'){?>
                        <td><span class="badge badge-primary"><?php echo $row->status_; ?></span></td>
                    <?php }if($row->status_ == 'PDP'){?>
                        <td><span class="badge badge-warning"><?php echo $row->status_; ?></span></td>
                    <?php } if($row->status_ == 'POSITIF'){?>
                        <td><span class="badge badge-danger"><?php echo $row->status_; ?></span></td>
                    <?php } ?>
                    <td><?php echo $row->status_karantina; ?></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

