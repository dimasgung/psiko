<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Bimbingan Psikologi</title>
	<link href='<?php echo base_url(); ?>/resources/css/style.css' type='text/css' rel='stylesheet' />
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>/resources/images/logo" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li>
					<a href="<?php echo site_url();?>/home">Beranda</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/home/about">Tentang</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/home/practices">Practices</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/home/consultant_list">Konsultan</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/home/artikel_berita">Berita</a>
				</li>
				<li>
					<a href="<?php echo site_url();?>/home/contact">Kontak</a>
				</li>
            </ul>
		</div>
	</div>
    
	<?php echo $this->load->view($body) ?>
	
    <div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Berita Terbaru</h4>
				<p>
					Di sini akan diupload berita terbaru
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Alamat:</span> the address city, state 1111
				</p>
				<p>
					<span>Telephone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> bipi@web.id
				</p>
			</div>
			<div class="section">
				<h4>Kirim Pesan ke Kami</h4>
				<p>
				    kirim pesan melalui ini
				</p>
				<a href="" class="subscribe">Klik untuk mengirim email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					©Dibuat oleh tim DAR, Fasilkom UI
				</p>
			</div>
		</div>
	</div>
</body>
</html>