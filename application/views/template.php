<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/vendor/chartist/css/chartist-custom.css">
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
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?=base_url();?>assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>assets/img/user.png" class="img-circle">
								<span>
									<?php
										if ($this->session->userdata('username')) {
											echo $this->session->userdata('username');	
										}elseif ($this->session->userdata('username_pelanggan')) {
											echo $this->session->userdata('username_pelanggan');
										}
									?>
								</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?=base_url("index.php");?>/login/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<?php
							if($this->session->userdata('username')){
							?>
								<li>
									<a href="<?=base_url('index.php');?>/dashboard" <?php if($main_menu == 'dashboard'):?>class="active"<?php endif;?>><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
								</li>

								<li>
									<a href="<?=base_url('index.php');?>/masakan" <?php if($main_menu == 'masakan'):?>class="active"<?php endif;?>><i class="lnr lnr-code"></i> <span>Masakan</span></a>
								</li>

								<li>
									<a href="<?=base_url('index.php');?>/pelanggan/list_pelanggan" <?php if($main_menu == 'pelanggan'):?>class="active"<?php endif;?>><i class="lnr lnr-code"></i> <span>Pelanggan</span></a>
								</li>
								<li>
									<a href="<?=base_url('index.php');?>/transaksi" <?php if($main_menu == 'transaksi'):?>class="active"<?php endif;?>><i class="lnr lnr-code"></i> <span>Transaksi</span></a>
								</li>

								<?php if ($this->session->userdata('level_name') == 'superadmin'): ?>
									<li>
										<a href="<?=base_url('index.php');?>/admin" <?php if($main_menu == 'admin'):?>class="active"<?php endif;?>><i class="lnr lnr-code"></i> <span>Admin</span></a>
									</li>
								<?php endif ?>
							<?php
							}elseif ($this->session->userdata('username_pelanggan')) {
							?>
								<li>
									<a href="<?=base_url('index.php');?>/pelanggan" class="active">
										<i class="lnr lnr-home"></i> <span>Pemesanan</span>
									</a>
								</li>
							<?php
							}
						?>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<?php
					if ($this->session->flashdata('success')) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h3><i class="fa fa-check-circle"></i><?=$this->session->flashdata('success');?></h3>
						</div>
						<?php
					}elseif ($this->session->flashdata('failed')) {
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h3><i class="fa fa-times-circle"></i><?=$this->session->flashdata('failed');?></h3>
						</div>
						<?php
					}
					$this->load->view($main_view);
					?>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url();?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?=base_url();?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?=base_url();?>assets/scripts/klorofil-common.js"></script>
	<script type="text/javascript">
	<?php
	$transaksi_jan = $this->db->like('tanggal',date('Y').'-01-')->get('order')->result();
	$transaksi_feb = $this->db->like('tanggal',date('Y').'-02-')->get('order')->result();
	$transaksi_mar = $this->db->like('tanggal',date('Y').'-03-')->get('order')->result();
	$transaksi_apr = $this->db->like('tanggal',date('Y').'-04-')->get('order')->result();
	$transaksi_may = $this->db->like('tanggal',date('Y').'-05-')->get('order')->result();
	$transaksi_jun = $this->db->like('tanggal',date('Y').'-06-')->get('order')->result();
	$transaksi_jul = $this->db->like('tanggal',date('Y').'-07-')->get('order')->result();
	$transaksi_aug = $this->db->like('tanggal',date('Y').'-08-')->get('order')->result();
	$transaksi_sept = $this->db->like('tanggal',date('Y').'-09-')->get('order')->result();
	$transaksi_oct = $this->db->like('tanggal',date('Y').'-10-')->get('order')->result();
	$transaksi_nov = $this->db->like('tanggal',date('Y').'-11-')->get('order')->result();
	$transaksi_dec = $this->db->like('tanggal',date('Y').'-12-')->get('order')->result();
	?>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug','Sept','Oct','Nov','Dec'],
			series: [
				[<?php echo count($transaksi_jan).','.count($transaksi_feb).','.count($transaksi_mar).','.count($transaksi_apr).','.count($transaksi_may).','.count($transaksi_jun).','.count($transaksi_jul).','.count($transaksi_aug).','.count($transaksi_sept).','.count($transaksi_oct).','.count($transaksi_nov).','.count($transaksi_dec);?>]
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart1', data, options);
		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
