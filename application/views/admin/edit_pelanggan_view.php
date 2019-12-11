<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Pelanggan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url('index.php');?>/pelanggan/proses_edit" method="post">
				<label>Id pelanggan</label>
				<input type="number" value="<?=$list_pelanggan->id_pelanggan;?>" class="form-control" readonly name="id_pelanggan">
				<br>

				<label>Nama</label>
				<input type="text" value="<?=$list_pelanggan->nama;?>" class="form-control" name="nama">
				<br>

				<label>Telp</label>
				<input type="number" value="<?=$list_pelanggan->telp;?>" class="form-control" name="telp">
				<br>

				<label>Alamat</label>
				<textarea class="form-control" name="alamat"><?=$list_pelanggan->alamat;?></textarea>
				<br>

				<label>Username</label>
				<input type="text" value="<?=$list_pelanggan->username;?>" class="form-control" name="username">
				<br>

				<label>Password</label>
				<input type="text" value="<?=$list_pelanggan->password;?>" class="form-control" name="password">
				<br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
			<br>
			<a class="btn btn-primary" href="<?=base_url('index.php');?>/pelanggan/list_pelanggan">Kembali</a>
		</div>
	</div>
</div>