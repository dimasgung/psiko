      <div id="page-wrapper">
        <div class="row">
        <div class="col-lg-12">
          <h1>Balas <small>Pertanyaan</small></h1>
        </div>
      </div><!-- /.row -->

      <div>
        
        <?php
          $index = 0; 
          foreach($pertanyaan as $row) { 

          if($index==0){ ?>
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
            <b>Daftar Komentar</b></br>
          <?php
            $index++;;
          } else {
          ?>
            <div class="panel panel-default" style="margin-left:10px; padding-left:50px; background-color:#CCFFFF;">
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
        }
        ?>
      </div>
      </div>