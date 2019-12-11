<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Admin</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id Admin</label>
			<input type="text" value="<?=$list_admin->id_user;?>" disabled class="form-control">
			<br>

			<label>Nama</label>
			<input type="text" value="<?=$list_admin->nama_user;?>" disabled class="form-control">
			<br>

			<label>Username</label>
			<input type="text" value="<?=$list_admin->username;?>" disabled class="form-control">
			<br>

			<label>Level</label>
			<input type="text" value="<?=$list_admin->nama_level;?>" disabled class="form-control">
			<br>

			<a class="btn btn-primary" href="<?=base_url('index.php');?>/Pelanggan/list_pelanggan">Kembali</a>
		</div>
	</div>
</div>