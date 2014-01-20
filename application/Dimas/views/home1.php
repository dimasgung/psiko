
    
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('<?php echo base_url(); ?>/resources/images/psikotest.jpg');"></div>
            <div class="carousel-caption">
              <h1>Psikotes</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url(); ?>/resources/images/parenting.jpg');"></div>
            <div class="carousel-caption">
              <h1>Parenting</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url(); ?>/resources/images/sasasasa.jpg');"></div>
            <div class="carousel-caption">
              <h1>Family Consulting</h1>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">

      <div class="container">

        <div class="row">

          <div class="col-md-8">
            <h2 class="page-header"><?php echo $sekilas->judul?></h2>
                <?php echo $sekilas->isi?>
          </div>

          <div class="col-md-4">
            <h2 class="page-header">Kontak Kami</h2>
              <p>Arnita Kusumaningrum, M.Psi</p>
              <p>Email Address : tas_kiyut@yahoo.com</p>
              <p>Contact No. : 08562883866</p>
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

    </div><!-- /.section -->