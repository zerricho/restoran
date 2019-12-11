<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pelanggan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id Pelanggan</label>
			<input type="text" value="<?=$list_pelanggan->id_pelanggan;?>" disabled class="form-control">
			<br>

			<label>Nama</label>
			<input type="text" value="<?=$list_pelanggan->nama;?>" disabled class="form-control">
			<br>

			<label>Telp</label>
			<input type="text" value="<?=$list_pelanggan->telp;?>" disabled class="form-control">
			<br>

			<label>Alamat</label>
			<textarea disabled class="form-control"><?=$list_pelanggan->alamat;?></textarea>
			<br>

			<label>Username</label>
			<input type="text" value="<?=$list_pelanggan->username;?>" disabled class="form-control">
			<br>

			<label>Password</label>
			<input type="text" value="<?=$list_pelanggan->password;?>" disabled class="form-control">
			<br>

			<a class="btn btn-primary" href="<?=base_url('index.php');?>/Pelanggan/list_pelanggan">Kembali</a>
		</div>
	</div>
</div>