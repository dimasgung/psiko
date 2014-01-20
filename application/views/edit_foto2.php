<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Geleri Foto <small>Ganti Foto Sesukamu</small></h1>
    </div>
  </div><!-- /.row -->
  
  <div class="row">
   <div class="col-md-6">
      <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/<?php echo $foto->nama_foto?>">
    </div>
  </div>
  <br>
  <div class="row"> 
    <div class="form-group">
      <?php echo form_open_multipart("admin/edit_photo_selected")?>
        <label>Masukkan File Foto</label>
        <input type="file" name="userfile" onchange="readURL(this);">
        <br>
        <img id="img_prev" src="#" alt="your image" style="border-radius:25px; max-width:95%; border:3px groove #545565;"/>
        <br><br>
        <input type="hidden" value="<?php echo $foto->id_foto?>" name="id"></input>
	<input type="hidden" value="<?php echo $foto->nama_foto?>" name="url"></input>
        <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengedit foto ini?')" name="submit" value="Ubah">
        <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin menghapus foto ini?')" name="submit" value="Hapus">
      <?php echo form_close();?>
    </div>
  </div>
</div><!-- /#page-wrapper -->