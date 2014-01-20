

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Artikel <small>Berita</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li class="active">Artikel</li>
          </ol>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-8">
        	<?php foreach($artikel as $row) { ?>
          <h1><a><?php echo $row['judul']?></a></h1>
          <!--<p class="lead"></p>-->
          <hr>
          <p><i>Kategori: <?php echo $row['kategori']?></i></p>
          <p><i>Diterbitkan tanggal: <?php $tanggal = explode("-", $row['tanggal']); echo $tanggal[2]."-".$tanggal[1]."-".$tanggal[0]?> Oleh <?php echo $row['pengarang']?></i></p>
          <hr>
          <p align="justify"><?php echo $row['isi']?></p>
          <!--<a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>-->
		      <hr>
          <?php }?>
          <?php if(empty($temp)){?>
            <ul class="pager">
            	<div class="paging"><?php echo $links;?></div>
            </ul>
          <?php }?>
        </div>
         <div class="col-lg-4">
          <div class="well">
            <h4>Kategori Artikel Populer</h4>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="<?php echo site_url("home/article/klinis");?>">Klinis</a></li>
                    <li><a href="<?php echo site_url("home/article/sosial");?>">Sosial</a></li>
                    <li><a href="<?php echo site_url("home/article/pendidikan");?>">Pendidikan</a></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="<?php echo site_url("home/article/pengembangan_sdm");?>">Pengembangan SDM</a></li>
                    <li><a href="<?php echo site_url("home/article/pengembangan_anak");?>">Pengembangan Anak</a></li>
                  </ul>
                </div>
              </div>
          </div><!-- /well -->
          
        </div>

      </div>
  </div>