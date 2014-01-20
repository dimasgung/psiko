      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Edit Artikel <small>Berita</small></h1>
          </div>
        </div><!-- /.row -->
        
        <div class="row">
          <div class="col-lg-6">
		   <?php echo form_open("admin/edit_article_selected")?>
				<input type="hidden" value="<?php echo $artikel->id_artikel_berita?>" name="id"></input>
		
				<div class="form-group">
				  <label>Dibuat tanggal: <?php echo $artikel->tanggal?> </label>
				</div>
			
				<div class="form-group">
				  <label>Oleh:</label>
				  <input class="form-control" type="text" name="pengarang" value="<?php echo $artikel->pengarang?>" required=""></input>
				 </div>
		
				<div class="form-group">
				  <label>Judul Artikel:</label> 
					<input class="form-control" type="text" name="judul" value="<?php echo $artikel->judul?>" required=""></input>
				</div>
				
				<div class="form-group">
				  <label>Kategori Artikel:</label> 
					<select class="form-control" name="kategori">
						<option value="<?php echo $artikel->kategori?>"><?php echo $artikel->kategori?></option>
						<option value="klinis">Klinis</option>
						<option value="pendidikan">Pendidikan</option>
						<option value="sosial">Sosial</option>
						<option value="pengembangan_anak">Pengembangan Anak</option>
						<option value="pengembangan_SDM">Pengembangan SDM</option>
					</select>
				</div>

				<div class="form-group">
					<label>Isi:</label>
					<textarea name="isi"><?php echo $artikel->isi?></textarea>
				</div>
		
				<input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengedit artikel ini?')" name="submit" value="Ubah">
				<input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin menghapus artikel ini?')" name="submit" value="Hapus">
		  
		  <?php echo form_close();?>

          </div>
        </div><!-- /.row -->

      </div>