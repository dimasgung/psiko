<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/resources/images/favicon.png">
    <title><?php echo $title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>/resources/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" > <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script src="<?php echo base_url(); ?>/resources/js/jquery.min.js"></script>
	  <script>
          tinymce.init({selector:'textarea'});
    </script>
  </head>
  
  <style>
.dropdown-menu .sub-menu {

  right: 100%;
  top: 10px;
  visibility: hidden;
  margin-top: -1px;
}

.dropdown-menu li:hover .sub-menu {
  visibility: visible;
  display: block;
}



.dropdown:hover .dropdown-menu {
   display: block;
} 
   </style>
 

  <body >
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url("home");?>">Biro Psikologi</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
		  
		  <li ><a href="<?php echo site_url("home");?>">Home</a></li>
		  
            <li  class ="dropdown"><a href="<?php //echo site_url("home/services");?>"  class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
			
			<ul class="dropdown-menu" id="menu1">
               <li><a href="<?php echo site_url("home/services/klinis");?>">Klinis</a></li>
               <li><a href="<?php echo site_url("home/services/pendidikan");?>">Pendidikan</a></li>
               <li class="dropdown-submenu"><a href="#">Industri dan Organisasi <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
			   
			   <ul class="dropdown-menu sub-menu">
                   <li><a href="<?php echo site_url("home/services/rekrutmen_seleksi");?>">Rekrutmen dan Seleksi</a></li>
                   <li><a href="<?php echo site_url("home/services/recruitment_consultant");?>">Recruitment Consultant</a></li>
                   <li><a href="<?php echo site_url("home/services/psychological_assesment");?>">Psychological Assesment</a></li>
                   <li><a href="<?php echo site_url("home/services/assesment_centre");?>">Assesment Centre</a></li>
                   <li><a href="<?php echo site_url("home/services/konseling_karyawan");?>">Konseling Karyawan</a></li>
				   <li><a href="<?php echo site_url("home/services/training");?>">Training</a></li>
                   <li><a href="<?php echo site_url("home/services/performance_management");?>">Performance Management</a></li>
                   <li><a href="<?php echo site_url("home/services/hris");?>">HRIS (Human Resource Information System)</a></li>
                 </ul>
			   
			   </li>
             </ul>
			
			</li>
            <li><a href="<?php echo site_url("home/consultant");?>">Konsultan</a></li>
            <li class ="dropdown"><a href="<?php // echo site_url("home/article");?>"  class="dropdown-toggle" data-toggle="dropdown">Artikel</a>
			
			<ul class="dropdown-menu">
               <li><a href="<?php echo site_url("home/article/klinis");?>">Klinis</a></li>
               <li><a href="<?php echo site_url("home/article/sosial");?>">Sosial</a></li>
               <li><a href="<?php echo site_url("home/article/pendidikan");?>">Pendidikan</a></li>
			   <li><a href="<?php echo site_url("home/article/pengembangan_sdm");?>">Pengembangan SDM</a></li>
               <li><a href="<?php echo site_url("home/article/pengembangan_anak");?>">Pengembangan Anak</a></li>
             </ul>
			
			</li>
            <li><a href="<?php echo site_url("home/gallery");?>">Galeri</a></li>
			<li class ="dropdown"><a href="#">Konsultasi</a>
			
			<ul class="dropdown-menu">
               <li><a href="<?php echo site_url("home/list_pertanyaan");?>">List Pertanyaan</a></li>
               <li><a href="<?php echo site_url('home/konsultasi_pertanyaan');?>">Kirim Pertanyaan</a></li>
             </ul>
			
			
			</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
	
	<?php if(!empty($error))
          {
            if($error=="2") echo "<script>alert('Pertanyaan anda akan dikonfirmasi oleh admin terlebih dahulu(tidak langsung ditampilkan)!')</script>";
          }?>
	
    <?php $this->load->view($body);?>

<div class="container">
  <hr>
  <footer>
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright &copy; Company 2013</p>
      </div>
    </div>
  </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
	<script src="<?php echo base_url(); ?>/resources/js/jquery-1.10.2.js"></script>
	<script src="<?php echo base_url(); ?>/resources/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/resources/js/modern-business.js"></script>

  </body>
</html>