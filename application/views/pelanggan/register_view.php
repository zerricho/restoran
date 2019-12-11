<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?=base_url();?>assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Register</p>
							</div>
							<form class="form-auth-small" action="<?=base_url('index.php');?>/login/proses_register" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" id="signin-email" placeholder="Username" name="username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" placeholder="Password" name="password">
								</div>
								<div class="form-group">
									<label for="signin-nama" class="control-label sr-only">Nama</label>
									<input type="text" class="form-control" id="signin-nama" placeholder="nama" name="nama">
								</div>
								<div class="form-group">
									<label for="signin-alamat" class="control-label sr-only">Alamat</label>
									<textarea type="text" class="form-control" id="signin-alamat" placeholder="alamat" name="alamat"></textarea>
								</div>
								<div class="form-group">
									<label for="signin-telp" class="control-label sr-only">Telpon</label>
									<input type="telp" class="form-control" id="signin-telp" placeholder="No. Telpon" name="telp">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
								<p>Have Account ? <a href="<?=base_url('index.php');?>/login/login_pelanggan">Login</a></p>
							</form>
						</div>
					</div>
					<div class="right">
						<?php 
							$class = '';
							if($this->session->flashdata('success')){
								$class = 'overlay-success';
							}elseif ($this->session->flashdata('failed')) {
								$class = 'overlay-danger';
							}else{
								$class = 'overlay';
							}
						?>
						<div class="<?=$class?>"></div>
						<div class="content text">
							<h1 class="heading">
								<?php
									if ($this->session->flashdata('success')) {
										echo $this->session->flashdata('success');
									}elseif ($this->session->flashdata('failed')) {
										echo $this->session->flashdata('failed');
									}else{
										echo 'Restoran ULALA';
									}
								?>
							</h1>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
