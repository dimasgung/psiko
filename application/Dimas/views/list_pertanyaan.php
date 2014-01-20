

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Konsultasi <small>online</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li>Konsultasi</li>
			<li class="active">Daftar Pertanyaan</li>
          </ol>
        </div>

      </div>
	<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Daftar <small>pertanyaan</small></h1>
	  <br/>
    </div>
  </div><!-- /.row -->
        
<div class="row">

        <div class="col-lg-8">
		
		<table class="table table-hover">
			<tr>
				<th><b>Judul Pertanyaan</b></th><th><b>Email Pengirim</b></th><th><b>Tanggal</b></th>
			</tr>
			
			<?php foreach($list_pertanyaan as $row) { ?>
			<tr>
				<td><a href="<?php echo site_url('home/detil_pertanyaan/' .$row['id_sub_komentar'] ."/" .$row['judul']);?>"><?php echo $row['judul'];?></a></td><td><?php echo $row['email'];?></td><td><?php echo $row['tanggal'];?></td>
			</tr>
			
			<?php }?>
			
		</table>

      </div>

</div><!-- /#page-wrapper -->
	
  </div>