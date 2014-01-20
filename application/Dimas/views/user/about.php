	<div id="contents">
		<div class="clearfix">
			<h1>Tentang Kami</h1>
			<div class="frame2">
				<div class="box">
					<img src="<?php echo base_url(); ?>/resources/images/thumb-up.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<h2><?php echo $tentang->judul?></h2>
			<p align="justify"><?php echo $tentang->isi?></p>
			<h2><?php echo $visi->judul?></h2>
			<p align="justify"><?php echo $visi->isi?></p>
			<h2>Misi Kami</h2>
			<?php echo $misi_desc->isi?>
			<ul>
			    <?php foreach($misi_list as $row) { ?>	
			    <li>
			        <?php echo $row['isi']; ?>
			     </li>
			     <?php } ?>
			</ul>
			<h2><?php echo $misc_desc->isi?></h2>
			<ul>
			    <?php foreach($misc_list as $row) { ?>	
			    <li>
			        <?php echo $row['isi']; ?>
			     </li>
			     <?php } ?>
			</ul>
		</div>
	</div>