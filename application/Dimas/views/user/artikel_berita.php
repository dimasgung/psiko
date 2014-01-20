<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Recent News</h2>
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
						&ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&rdquo; <span>- Jared Greene</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>Artikel Berita</h1>
				<ul class="news">
					<?php foreach($artikel_berita as $row) { ?>
            		<li>
						<div class="box">
							<img src="<?php echo base_url(); ?>/resources/images/<?php echo $row['foto']?>" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							<?php echo $row['tanggal']?> oleh <span class="author"><?php echo $row['pengarang']?></span>
						</p>
						<h2><?php echo $row['nama']?></h2>
						<p align="justify">
							<?php echo $row['isi']?>
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>