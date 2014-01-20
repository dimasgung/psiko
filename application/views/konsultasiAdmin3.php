      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Balas <small>Pertanyaan</small></h1>
            <ol class="breadcrumb">
              <li>Konsultasi</li>
              <li><a href="<?php echo site_url("admin/balas_konsultasi");?>">Daftar Pertanyaan</a></li>
              <li><a href="<?php echo site_url("admin/detil_pertanyaan/".$pertanyaan->id_sub_komentar);?>"><?php echo $pertanyaan->judul ?></a></li>
              <li class="active">Balas Konsultasi</li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div>
          <div class="panel panel-default" style="margin-left:10px; padding-left:50px; background-color:#33FF99;">
            <div class="panel-heading" style="background-color:#33FF00;"><b>Judul: <?php echo $pertanyaan->judul?></b></br>
              by <b><?php echo $pertanyaan->email?> </b>, pada tanggal <b><?php echo $pertanyaan->tanggal?></b>
            </div>
            <div class="panel-body" style="border:1px solid #33FF00; background-color:#FFFFFF;">
              <b>Pertanyaan:</b></br>
              <?php echo $pertanyaan->isi?>          
            </div>
          </div>
          <div class="row" <div style="border:1px solid #33CCFF; padding-left:50px; margin-left:10px;">
            <b>Balasan:</b></br>
                <?php echo form_open("admin/add_komentar_admin")?>

                 <div class="form-group">
                    <label>Masukkan Judul Komentar</label>
                    <input class="form-control" name="judul" placeholder="Masukkan Teks" required="" value="<?php echo $pertanyaan->judul?>">
                  </div>

                  <div class="form-group">
                    <label>Masukkan Isi Komentar</label>
                    <textarea name="isi"></textarea>
                  </div>

                  <input type="hidden" name="id" value="<?php echo $pertanyaan->id_komentar?>">
                  <input type="hidden" name="id_sub" value="<?php echo $pertanyaan->id_sub_komentar?>">
                  <input type="submit" class="btn btn-default" onclick = "return confirm('Anda yakin ingin membalas komentar/pertanyaan ini?')" name="submit" value="Submit">
                  <button type="reset" class="btn btn-default">Batal</button>
                  
                <?php echo form_close();?>

          </div><!-- /.row -->

        </div>
    </div>