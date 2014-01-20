

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Konsultasi <small>online</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li>Konsultasi</li>
			<li><a href="<?php echo site_url("home/list_pertanyaan");?>">Daftar Pertanyaan</a></li>
			<li class="active"><?php echo $judul;?></li>
          </ol>
        </div>

      </div>
	  <div id="page-wrapper">  
		<div class="row">

	        <div class="col-lg-10" style="padding-left:50px;">	
				<?php foreach($detil as $row) { ?>
				
					<?php if($row['email']!='admin'){
					?>
						<div class="panel panel-default" style="margin-left:10px; padding-left:50px; background-color:#33FF99;">
			              <div class="panel-heading" style="background-color:#33FF00;"><b>Judul: <?php echo $row['judul']?></b></br>
			                by <b><?php echo $row['email']?> </b>, pada tanggal <b><?php echo $row['tanggal']?></b>
			              </div>
			              <div class="panel-body" style="border:1px solid #33FF00; background-color:#FFFFFF;">
			                <div style="border-bottom:1px dotted #000000;">
			                <b>Pertanyaan:</b></br>
			                <?php echo $row['isi']?>          
			                </div>
			                <div style="float:right;">
			                  <a href="<?php echo site_url('admin/hapus_komentar/' .$row['id_komentar']);?>" title="hapus komentar">delete</a> |
			                  <?php
			                    if($row['email']=='admin'){ ?>
			                      <a href="<?php echo site_url('admin/edit_komentar_admin/' .$row['id_komentar']);?>" title="edit komentar">edit</a> |
			                   <?php }
			                  ?>
			                  <a href="<?php echo site_url('admin/jawab_pertanyaan/' .$row['id_sub_komentar']);?>" title="balas komentar">reply</a>
			                </div>
			              </div>
			            </div>
					
					<?php }
					else { 
					?>
						<div class="panel panel-default" style="margin-left:50px; padding-left:50px; background-color:#CCFFFF;">
			              <div class="panel-heading" style="background-color:#33CCFF;"><b>Judul: <?php echo $row['judul']?></b></br>
			                by <b><?php echo $row['email']?> </b>, pada tanggal <b><?php echo $row['tanggal']?></b>
			              </div>
			              <div class="panel-body" style="border:1px solid #33CCFF; background-color:#FFFFFF;">
			                <div style="border-bottom:1px dotted #000000;">
			                <b>Komentar:</b></br>
			                <?php echo $row['isi']?>          
			                </div>
			                <div style="float:right;">
			                  <?php
			                    if($row['email']=='admin'){ ?>
			                      <a href="<?php echo site_url('admin/edit_komentar_admin/' .$row['id_komentar']);?>" title="edit komentar">edit</a> |
			                   <?php }
			                  ?>
			                  <a href="<?php echo site_url('admin/hapus_sub_komentar/' .$row['id_komentar']).'/'. $row['id_sub_komentar'];?>" title="hapus komentar" onclick = "return confirm('Anda yakin ingin menghapus komentar ini?')">delete</a> |
			                  <a href="<?php echo site_url('admin/jawab_pertanyaan/' .$row['id_sub_komentar']);?>" title="balas komentar">reply</a>
			                </div>
			              </div>
			            </div>
					<?php
					}
					?>
				<?php }?> <!-- end of foreach -->
				
	<!-- 		<?php echo form_open("home/balas_pertanyaan/" .$id)?>
			 <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengirim pesan?')" name="submit" value="balas">
			<?php echo form_close();?> -->
	      </div>
	</div><!-- /#page-wrapper -->
  </div>