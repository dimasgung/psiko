<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Test <small>Halaman ini berguna sebagai uji coba</small></h1>
      
    </div>

  </div><!-- /.row -->

<!-- Service Tabs -->

<div class="row">

  <div class="col-lg-12">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="service-one">
	  
	    <table>
            <tr>
            <td>Negara</td>
            <td>
                        <select class = "form-control" name="negara" id="negara">
                <option value="">Pilih Negara</option>
                <?php
                    foreach ($negara->result() as $row)
                    echo "<option value='".$row->id_negara."'>".$row->nama_negara."</option>";
                ?>
            </select>
                    </td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>
                <select class = "form-control" name="provinsi" id="provinsi">
                <option value="">Pilih Provinsi</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>
                <select class = "form-control" name="kota" id="kota">
                <option value="">Pilih Kota / Kabupaten</option>
            </select>
            </td>
        </tr>
        </table>
    		<script type="text/javascript">
			/*
				var dropdown_prov = $("#provinsi_dropdown").clone();
				
				var refresh_provinsi = function() 
				{
					$("[name=provinsi]").remove();
					var dropdown_provinsi = dropdown_prov.clone();
					var id_neg = $("[name=negara]").val();
					dropdown_provinsi.find("[id-negara]").not("[id-negara=" + id_neg + "]").remove();
					$("#provinsi_dropdown").append(dropdown_provinsi);
				}
				
				var dropdown_kota1 = $("#kota_dropdown").clone();
				
				var refresh_kota = function()
				{
					$("[name=kota]").remove();
					var dropdown_kota = dropdown_kota1.clone();
					var id_prov = $("[name=provinsi]").val();
					dropdown_kota.find("[id-provinsi]").not("[id-provinsi=" + id_prov + "]").remove();
					$("#kota_dropdown").append(dropdown_kota);
				}
				$("[name=negara]").change(refresh_provinsi);
				refresh_provinsi();
				$("[name=negara]").change(refresh_kota);
				$("#provinsi_dropdown").change(refresh_kota);
				refresh_kota();
			*/
			$(document).ready(function(){       
			$('#negara').change(function(){
				$.post("<?php echo base_url();?>index.php/home/get_state/"+$('#negara').val(),{},function(obj){
					$('#provinsi').html(obj);
				});
				
			});
			$('#provinsi').change(function(){
				$.post("<?php echo base_url();?>index.php/home/get_city/"+$('#provinsi').val(),{},function(obj){
				$('#kota').html(obj);
				});
				});
			});
			
			</script>
		</div>
    </div>
  </div>

</div><!-- /.row -->

</div><!-- /.container -->