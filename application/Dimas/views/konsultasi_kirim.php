

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Konsultasi <small>online</small></h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url("home");?>">Home</a></li>
            <li>Konsultasi</li>
			<li class="active">Kirim Pertanyaan</li>
          </ol>
        </div>

      </div>
	<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <h1>Kirim <small>pertanyaan</small></h1>
	  <br/>
    </div>
  </div><!-- /.row -->
        
  <div class="row">
    <div class="col-lg-6" >

      <?php echo form_open("home/tambah_pertanyaan")?>

       <div class="form-group" >
          <label>Judul Pertanyaan</label>
          <input class="form-control" name="nama" placeholder="Masukkan Teks" required="">
        </div>

        <div class="form-group">
          <label>Email Anda</label>
          <input class="form-control" name="email" placeholder="Masukkan Teks" required="">
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
	
  </div>