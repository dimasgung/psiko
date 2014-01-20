      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Edit Foto <small>Ganti Foto Sesukamu</small></h1>
          </div>
        </div><!-- /.row -->
        
  <div class="row">
    <?php foreach ($list_foto as $row) { ?>
    <div class="col-md-3 portfolio-item">
      <a href="<?php echo site_url('admin/edit_photo/').'/'.$row['id_foto'] ?>"><img style="border-radius:25px; border:3px groove #545565; margin: 45px 0 0 0; width:300px; height:300px" class="img-responsive" src="<?php echo base_url(); ?>resources/images/<?php echo $row['nama_foto']?>"></a>
    </div>
    <?php } ?>
  </div>
  <ul class="pager">
    <div class="paging"><?php echo $links;?></div>
  </ul>
      </div>