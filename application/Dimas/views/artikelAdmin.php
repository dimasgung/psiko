<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Artikel <small>Berita</small></h1>
    </div>
  </div><!-- /.row -->
        
  <div class="row">
    <div class="col-lg-6">

      <?php echo form_open("admin/add_article")?>

       <div class="form-group">
          <label>Masukkan Judul Artikel</label>
          <input class="form-control" name="judul" placeholder="Masukkan Teks" required="">
        </div>

        <div class="form-group">
          <label>Masukkan Pengarang Artikel</label>
          <input class="form-control" name="pengarang" placeholder="Masukkan Teks" required="">
        </div>

        <div class="form-group">
          <label>Masukkan Kategori Artikel</label>
          <select name="kategori" class="form-control">
			  <option value="klinis">Klinis</option>
			  <option value="pendidikan">Pendidikan</option>
			  <option value="sosial">Sosial</option>
			  <option value="pengembangan_anak">Pengembangan Anak</option>
			  <option value="pengembangan_SDM">Pengembangan SDM</option>
			</select>
        </div>

        <div class="form-group">
          <label>Masukkan Isi Artikel</label>
          <textarea name="isi"></textarea>
        </div>
        <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin menambah artikel?')" name="submit" value="Tambah">
        <button type="reset" class="btn btn-default">Batal</button>
        
      <?php echo form_close();?>

    </div>
  </div><!-- /.row -->

</div><!-- /#page-wrapper -->