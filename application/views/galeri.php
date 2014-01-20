
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Galeri</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("home");?>">Home</a></li>
        <li class="active">Galeri</li>
      </ol>
    </div>
  </div><!-- /.row -->
  
  <div class="row">
    <?php foreach ($list_foto as $row) { ?>
    <div class="col-md-3 portfolio-item">
      <img style="border-radius:25px; border:3px groove #545565; margin: 45px 0 0 0; width:450px; height:337px" class="img-responsive" src="<?php echo base_url(); ?>resources/images/<?php echo $row['nama_foto']?>">
    </div>
    <?php } ?>
  </div>
  <ul class="pager">
  	<div class="paging"><?php echo $links;?></div>
  </ul>

  <hr>
 
</div><!-- /.container -->