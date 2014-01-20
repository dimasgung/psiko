<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Tambah Foto <small>Upload Foto Sesukamu</small></h1>
    </div>
  </div><!-- /.row -->
  
  <div class="row">
    <div class="col-lg-6">

      <?php echo form_open_multipart("admin/add_photo")?>

        <div class="form-group">
          <label>Masukkan File Foto</label>
          <input type="file" name="userfile" onchange="readURL(this);">
          <br>
          <img id="img_prev" src="#" alt="your image" style="border-radius:25px; max-width:95%;border:6px groove #545565;"/>
          <br><br>

          <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin menambah foto?')" name="submit" value="Tambah">
          <button type="reset" class="btn btn-default">Batal</button>  
        </div>
        
      <?php echo form_close();?>

    </div>
  </div><!-- /.row -->

</div><!-- /#page-wrapper -->