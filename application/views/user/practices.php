<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Layanan</h2>
					<ul>
						<li>
							<a href="#">Klinis</a>
						</li>
						<li>
							<a href="#">Marriage</a>
						</li>
						<li>
							<a href="#">Divorce</a>
						</li>
					</ul>
				</div>
				<div>
					<h2>Client Testimonials</h2>
					<p>
						&ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&rdquo; <span>- Jared Greene</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>Layanan</h1>

				<h2>Klinis</h2>
				<?php echo $klinis_head_desc->isi?>
				<ul>
				    <?php foreach($klinis_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul>
				<?php echo $klinis_foot_desc->isi?></br></br>

				<h2>Pendidikan</h2>
				<ul>
				    <?php foreach($pendidikan_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul>
				<?php echo $pendidikan_desc->isi?>
				<ul>
				    <?php foreach($pendidikan_service as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul></br>

				<h2>Industri dan Organisasi</h2>
				<?php echo $rekrutmen_seleksi_head_desc->isi?>
				<ul>
				    <?php foreach($rekrutmen_seleksi_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul></br>

				<?php echo $rekrutmen_seleksi_foot_desc->isi?></br></br>
				<h2>Recruitment Consultant</h2>
				<?php echo $rekrutmen_konsultan_desc->isi?></br></br>
				<h3>a. <?php echo $rekrutmen_konsultan_full_service->nama?></h3>
				<?php echo $rekrutmen_konsultan_full_service->isi?></br></br>
				<h3>b. <?php echo $rekrutmen_konsultan_event_management->nama?></h3>
				<?php echo $rekrutmen_konsultan_event_management->isi?></br></br>
				<h3>c. <?php echo $rekrutmen_konsultan_executive_search->nama?></h3>
				<?php echo $rekrutmen_konsultan_executive_search->isi?></br></br>

				<h2>Psychological Assesment</h2>
				<?php echo $assesment_psikologi->isi?></br></br>

				<h2>Assesment Centre</h2>
				<?php echo $assesment_centre_desc_head->isi?></br>
				<ul>
				    <?php foreach($assesment_centre_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul>
				<b><?php echo $assesment_centre_desc_foot->isi?></b></br></br>

				<h2>Konseling Karyawan</h2>
				<?php echo $conseling_employee_desc_head->isi?></br>
				<ul>
				    <?php foreach($conseling_employee_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul>
				<b><?php echo $conseling_employee_desc_foot->isi?></b></br></br>

				<h2>Training</h2>
				<?php echo $training_desc_head->isi?></br>
				<ul>
				    <?php foreach($training_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul>
				<b><?php echo $training_desc_foot->isi?></b></br></br>

				<h2>Performance Management</h2>
				<?php echo $performance_management_desc->isi?></br>
				<ul>
				    <?php foreach($performance_management_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul></br></br>

				<h2>HRIS (Human Resources Information System)</h2>
				<?php echo $hris_desc->isi?></br>
				<ul>
				    <?php foreach($hris_list as $row) { ?>	
				    <li>
				        <?php echo $row['isi']; ?>
				     </li>
				     <?php } ?>
				</ul></br></br>

				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
				</p>
				<ul class="practices">
					<li class="frame5">
						<a href="post.html" class="box"><img src="<?php echo base_url(); ?>/resources/images/prenuptial.jpg" height="198" width="265"><span>Prenuptial Agreement</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="<?php echo base_url(); ?>/resources/images/bride.jpg" height="198" width="265"><span>Marriage</span></a>
					</li>
					<li class="frame5">
						<a href="post.html" class="box"><img src="<?php echo base_url(); ?>/resources/images/divorce.jpg" height="198" width="265"><span>Divorce</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>