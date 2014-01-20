<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Edit Artikel <small>Berita</small></h1>
          </div>
        </div><!-- /.row -->
        
        <div class="row">
          <div class="col-lg-6">
      			<?php foreach($list as $row) { ?>
      		    <li><a href="<?php echo site_url('admin/edit_article/' .$row['id_artikel_berita'])?>" ><?php echo $row['judul']?></a></li>
            <?php }?>
         </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->