<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/resources/images/favicon.png">
    <title>BiPi Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/resources/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>/resources/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" >

    <!-- for dinamyc text area -->
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>
          tinymce.init({selector:'textarea'});
    </script>

    <script type="text/javascript">
      function readURL(input) {
      if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
      $('#img_prev')
      .attr('src', e.target.result)
      .width(150)
      .height(200);
      };

      reader.readAsDataURL(input.files[0]);
      }
      }
    </script>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url("admin");?>">BiPi Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <?php $this->load->view($menu);?> 
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('id_user')?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('home/logout')?>"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <?php if(!empty($error))
          {
            if($error=="1") echo "<script>alert('Anda berhasil login!')</script>";
            if($error=="2") echo "<script>alert('Berhasil!')</script>";
          }?>
    
      <?php $this->load->view($body);?>

    </div>

    <script src="<?php echo base_url(); ?>/resources/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.js"></script>
  </body>
</html>