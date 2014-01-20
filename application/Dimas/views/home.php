<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navbar-nav navbar-left">
            <li class="active">
              <a class="navbar-brand" href="<?php echo site_url("home");?>">Biro Psikologi</a>    
            </li>
          </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li class ="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a></li>
            <li><a href="<?php echo site_url("home/consultant");?>">Konsultan</a>
			
			<ul class="dropdown-menu">
               <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
               <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
               <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
               <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
               <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
             </ul>
			 
			</li>
            <li><a href="<?php echo site_url("home/article");?>">Artikel</a></li>
            <li><a href="<?php echo site_url("home/gallery");?>">Galeri</a></li>
          </ul>
		  
		   
		  
		  
		  
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">BiPi <small>Biro Psikologi</small></h1>
    </div>

  </div><!-- /.row -->

  <div class="row">

    <div class="col-lg-12">
      <img class="img-responsive" src="<?php echo base_url()?>/resources/images/1200x300.gif">
    </div>

  </div><!-- /.row -->

<!-- Service Paragraphs -->

  <div class="row">

    <div class="col-md-8">
      <h2 class="page-header"><?php echo $sekilas->judul?></h2>
          <?php echo $sekilas->isi?>
    </div>

    <div class="col-md-4">
      <h2 class="page-header">Kontak Kami</h2>
        <p>Pepita Gunawan</p>
        <p>Email: pepita_gunawan@gmail.com</p>
        <p>No. Telepon: 0857223231</p>
        <p>Alamat: Jl. Jend. Sudirman Kav 11 Jakarta</p>
    </div>

  </div><!-- /.row -->

<!-- Service Tabs -->

<div class="row">

  <div class="col-lg-12">
    <h2 class="page-header">Kenali Kami Lebih Dekat</h2>
    <ul id="myTab" class="nav nav-tabs">
      <li class="active"><a href="#service-one" data-toggle="tab"><?php echo $tentang->judul?></a></li>
      <li><a href="#service-two" data-toggle="tab"><?php echo $visi->judul?></a></li>
      <li><a href="#service-three" data-toggle="tab">Misi Kami</a></li>
      <li><a href="#service-four" data-toggle="tab"><?php echo $sasaran->judul?></a></li>
      <li><a href="#service-five" data-toggle="tab"><?php echo $misc_desc->isi?></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="service-one">
        <i class="fa fa-gears pull-left fa-4x"></i>
        <?php echo $tentang->isi?>
      </div>
      <div class="tab-pane fade" id="service-two">
        <i class="fa fa-magic pull-left fa-4x"></i>
        <p><?php echo $visi->isi?></p>
      </div>
      <div class="tab-pane fade" id="service-three">
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><?php echo $misi_desc->isi?></p>
        <ul>
          <?php foreach($misi_list as $row) { ?>  
          <li>
              <p><?php echo $row['isi']; ?></p>
           </li>
           <?php } ?>
      </ul>
      </div>
      <div class="tab-pane fade" id="service-four">
        <i class="fa fa-magic pull-left fa-4x"></i>
        <p><?php echo $sasaran->isi?></p>
      </div>
      <div class="tab-pane fade" id="service-five">
        <i class="fa fa-flag pull-left fa-4x"></i>
        <ul>
          <?php foreach($misc_list as $row) { ?>  
          <li>
              <p><?php echo $row['isi']; ?></p>
           </li>
           <?php } ?>
      </ul>
      </div>
    </div>
  </div>

</div><!-- /.row -->

</div><!-- /.container -->