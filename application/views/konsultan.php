

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Konsultan</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url("home");?>">Home</a></li>
        <li class="active">Konsultan</li>
      </ol>
    </div>
  </div><!-- /.row -->

  
<!-- Service Tabs -->

	<div class="row">
	<?php foreach($consultant as $row) { ?>
	  <div class="col-lg-12">
	    <ul id="myTab" class="nav nav-tabs">
	      <li class="active"><a href="#service-one" data-toggle="tab"><?php echo $row['nama']?></a></li>
	    </ul>
	    <div id="myTabContent" class="tab-content">
	      <div class="tab-pane fade in active" id="service-one">
	        <img src="<?php echo base_url(); ?>resources/images/consultant/<?php echo $row['foto']?>" height="150" width="200">
	        <p align="justify"><?php echo $row['deskripsi']?></p>
	      </div>
	   </div>
	  </div>
	<hr>
	<?php } ?>
		<div class="col-md-8">
	      <h2 class="page-header"><?php echo $team_associate->judul?></h2>
	      <p align="justify"><?php echo $team_associate->isi?></p>
	  </div>
    <div class="col-md-8">
      <h2 class="page-header"><?php echo $team_psikolog->judul?></h2>
      <p align="justify"><?php echo $team_psikolog->isi?></p>
    </div>
	</div>

</div><!-- /.container -->