	<div id="contents">
			<div class="clearfix">
				<img src="<?php echo base_url(); ?>/resources/images/family-large.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>Tagline<br> Tagline</h1>
					<p>
						Tagline
					</p>
				</div>
			</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<?php if($this->session->userdata("id_user")) {?>
					<h2><b><?php echo $this->session->userdata('id_user'); ?></b></h2>
					<a href="<?php echo site_url("home/logout");?>"><img src="<?php echo base_url(); ?>/resources/images/logout.png" /></a>
				    <?php }?>
				</div>
				<h1><?php echo $home->judul?></h1>
				<p align="justify">
					<?php echo $home->isi?>
				</p>
			</div>
		</div>
		<div class="featured">
			<h2>Mengapa Memilih Kami?</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/meeting.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Tim Kami</b> Tim kami terdiri dai handal
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/handshake.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Ketahui kami lebih lanjut</b> Silahkan klik untuk mengetahui kami lebih lanjut
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/smile.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Apa yang kami tawarkan?</b> Gabung dengan kami
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/family-small.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Ingin bergabung dengan kami?</b> Dapatkan pengalaman menarik jika bergabung dengan 
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>