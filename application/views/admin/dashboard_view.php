<!-- OVERVIEW -->
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Weekly Overview</h3>
		<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-download"></i></span>
					<p>
						<span class="number"><?=count($list_transaksi);?></span>
						<span class="title">Transaksi</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-shopping-bag"></i></span>
					<p>
						<span class="number"><?=count($list_pelanggan);?></span>
						<span class="title">Pelanggan</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-eye"></i></span>
					<p>
						<span class="number"><?=count($list_admin);?></span>
						<span class="title">Admin</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-bar-chart"></i></span>
					<p>
						<span class="number"><?=count($list_masakan);?></span>
						<span class="title">Masakan</span>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading">Transaksi</h1>
				<div id="headline-chart1" class="ct-chart"></div>
			</div>
		</div>
	</div>
</div>