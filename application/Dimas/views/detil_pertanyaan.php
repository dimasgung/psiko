

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Konsultasi <small>online</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li>Konsultasi</li>
			<li>List Pertanyaan</li>
			
			<li class="active"><?php echo $judul;?></li>
          </ol>
        </div>

      </div>
	<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1><?php echo $judul;?></h1>
	  <br/>
    </div>
  </div><!-- /.row -->
        
<div class="row">

        <div class="col-lg-8">
		
		
		<?php foreach($detil as $row) { ?>
		
		<?php if($row['email']!='admin@admin.com')
		{
		 $penanda = "pertanyaan";
		
		}
		else {
		 $penanda = "jawaban";
		
		}
		
		
		?>
		
		
		<table class="table table-hover">
			<tr>
				<th><b><?php echo $penanda;?></b></th>
			</tr>
			
			<tr>
				<td><?php echo $row['isi'];?></td>
			</tr>
				</table>
				
			
			<?php }?>
			
		<?php echo form_open("home/balas_pertanyaan/" .$id)?>
		 <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengirim pesan?')" name="submit" value="balas">
		<?php echo form_close();?>
		 
	
		

		
		
      </div>

</div><!-- /#page-wrapper -->
	
  </div>