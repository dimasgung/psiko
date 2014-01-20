

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Konsultasi <small>online</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li>Konsultasi</li>
			<li>List Pertanyaan</li>
			
			<li class="active"><?php echo $detil->judul;?></li>
          </ol>
        </div>

      </div>
	<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1><?php echo $detil->judul;?></h1>
	  <br/>
    </div>
  </div><!-- /.row -->
        
<div class="row">

        <div class="col-lg-8">
		
		
		
		
		<?php if($detil->email!='admin@admin.com')
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
				<td><?php echo $detil->isi;?></td>
			</tr>
				</table>
				
			
			
			
		<?php echo form_open("home/kirim_balas_pertanyaan/" .$detil->id_sub_komentar ."/" .$detil->judul)?>
		 
		 <div class="form-group">
          <label>Masukkan balasan</label>
          <textarea name="isi"></textarea>
        </div>
		
        <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengirim pesan?')" name="submit" value="kirim">
        <button type="reset" class="btn btn-default">Batal</button>
		 
		 <?php echo form_close();?>
		 

		

		
		
      </div>

</div><!-- /#page-wrapper -->
	
  </div>