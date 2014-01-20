<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Artikel <small>Berita</small></h1>
    </div>
  </div><!-- /.row -->
        
  <div class="row">
    <div class="col-lg-6">

      <?php echo form_open("home/konsultasi_kirim")?>

       <div class="form-group">
          <label>Nama Anda</label>
          <input class="form-control" name="judul" placeholder="Masukkan Teks" required="">
        </div>

        <div class="form-group">
          <label>Email Anda</label>
          <input class="form-control" name="pengarang" placeholder="Masukkan Teks" required="">
        </div>

        <div class="form-group">
          <label>Masukkan Isi Pesan</label>
          <textarea name="isi"></textarea>
        </div>
        <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin mengirim pesan?')" name="submit" value="kirim">
        <button type="reset" class="btn btn-default">Batal</button>
        
      <?php echo form_close();?>

    </div>
  </div><!-- /.row -->

</div><!-- /#page-wrapper -->