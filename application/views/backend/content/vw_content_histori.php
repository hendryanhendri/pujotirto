<div class="page-contentbar">
    <div id="page-right-content">
        <div class="container"></br>

    <div class="row">
<div class="col-lg-12">
    <div class="card-box card">
        <div class="m-b-20 table-responsive">
           </br>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id Aktifitas</th>
                    <th>Nik / Ktp</th>
                    <th>Pengubah/Penambah</th>
                    <th>Form</th>
                    <th>Aksi</th>
                    <th>Dibuat Tanggal</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($getHistori as $row){?>
                <tr>
                    <td><?php echo $row->id_aktifitas; ?></td>
                    <td><?php echo $row->nik; ?></td>
                    <td><?php echo $row->fullname; ?></td>
                    <td><?php echo $row->form_; ?></td>
                    <td><?php echo $row->action_; ?></td>
                    <td><?php echo $row->created_date; ?></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

