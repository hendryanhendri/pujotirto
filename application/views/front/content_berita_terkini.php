<div id="page-right-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20">Berita Terkini</h4>

                <?php foreach($getBerita->result() as $row){?>
                
                <?php echo $row->status; ?>

                <?php }?>
            </div>
        </div>


    </div>
</div>