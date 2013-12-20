<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Law Firm</title>
	<link href='<?php echo base_url(); ?>/resources/css/style.css' type='text/css' rel='stylesheet' />
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>/resources/images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="main">
				<h1>Login</h1>
				<br>
				<h2>Masukkan Username dan Password</h2>
				
				<?php echo form_open('C_home/auth'); ?> 
					<label>Username</label>
					<input type="text" name="username">
					<br>
					<label>Password</label>
					<input type="password" name="password">
					<br><br>
					<input type="submit" value="Login">
				<?php 
                    if($error == "1") 
                    { 
                        echo "<script>alert('Username atau password harus diisi!')</script>";
                    }
                    else if($error == "2") 
                    {
                        echo "<script>alert('Username atau password salah!')</script>";
                    }
                    echo form_close(); 
                ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> the address city, state 1111
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@freewebsitetemplates.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="http://www.freewebsitetemplates.com/misc/contact/" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 Manes Winchester. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>