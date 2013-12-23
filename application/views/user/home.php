	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="<?php echo base_url(); ?>/resources/images/family-large.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>It’s never easy...<br> When it comes to family.</h1>
					<p>
						But we can set<br> everything straight.
					</p>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<?php if($this->session->userdata("id_user")) {?>
					<h2><b><?php echo $this->session->userdata('id_user'); ?></b></h2>
					<a href="<?php echo site_url("C_home/logout");?>"><img src="<?php echo base_url(); ?>/resources/images/logout.png" /></a>
				    <?php }?>
				</div>
				<h1><?php echo $home->judul?></h1>
				<p align="justify">
					<?php echo $home->isi?>
				</p>
			</div>
		</div>
		<div class="featured">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/meeting.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our lawyers</b> Our website templates are created with inspiration, checked for quality and originality.
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
						<b>get to know us more</b> Just browse through all our Free Website Templates and ﬁnd what you’re looking for.
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
						<b>what we offer</b> Join the discussion on our forum and meet other people in the community.
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
						<b>get in touch with us</b> And we love the challenge of doing something diferent and something special.
					</p>
					<a href="index.html" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>