
<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Layanan <small>Kami Siap Memenuhi Kebutuhan Anda</small></h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("home");?>">Home</a></li>
        <li class="active">Layanan</li>
      </ol>
    </div>

  </div><!-- /.row -->

<!-- Service Tabs -->

<div class="row">

  <div class="col-lg-12">
    <ul id="myTab" class="nav nav-tabs">
      <li class="active"><a href="#service-one" data-toggle="tab"><?php echo $klinis->judul?></a></li>
      <li><a href="#service-two" data-toggle="tab"><?php echo $pendidikan->judul?></a></li>
      <li><a href="#service-three" data-toggle="tab">Industri dan Organisasi</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="service-one">
        <i class="fa fa-gears pull-left fa-4x"></i>
        <p><b>Konseling</b></p>
        <?php echo $klinis->isi?>
      </div>
      <div class="tab-pane fade" id="service-two">
        <i class="fa fa-magic pull-left fa-4x"></i>
        <p><?php echo $pendidikan->isi?></p>
      </div>
      <div class="tab-pane fade" id="service-three">
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $rekrutmen_seleksi->judul?></b></p>
        <?php echo $rekrutmen_seleksi->isi?>
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $rekrutmen_konsultan->judul?></p></b>
        <?php echo $rekrutmen_konsultan->isi?> 
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
         <p><b><?php echo $psychological_assesment->judul?></p></b>
        <?php echo $psychological_assesment->isi?>
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $assesment_centre->judul?></p></b>
        <?php echo $assesment_centre->isi?> 
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $konseling_karyawan->judul?></p></b>
        <?php echo $konseling_karyawan->isi?>
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $training->judul?></p></b>
        <?php echo $training->isi?> 
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $performance_management->judul?></p></b>
        <?php echo $performance_management->isi?> 
        <hr>
        <i class="fa fa-flask pull-left fa-4x"></i>
        <p><b><?php echo $hris->judul?></p></b>
        <?php echo $hris->isi?>
      </div>
    </div>
  </div>

</div><!-- /.row -->

</div><!-- /.container -->