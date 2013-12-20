<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Konsultan Kami</h2>
					<p>
						This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
					</p>
					<p>
						You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					</p>
					<p>
						If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
					</p>
				</div>
				<div>
					<h2>Client Testimonials</h2>
					<p>
						&ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&ldquo; <span>- Jared Greene</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>Konsultan Kami</h1>
				<div class="section">
					<ul>
						<?php foreach($consultant as $row) { ?>				
						<li>
							<div class="frame4">
								<div class="box">
									<img src="<?php echo base_url(); ?>/resources/images/<?php echo $row['foto']?>" alt="Img" height="94" width="90">
								</div>
							</div>
							<p>
								<b><?php echo $row['nama']?></b> <?php echo $row['deskripsi']?>
							</p>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>