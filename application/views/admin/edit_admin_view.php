<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Admin</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url('index.php');?>/admin/proses_edit" method="post">
				<label>Id Admin</label>
				<input type="number" value="<?=$list_admin->id_user;?>" class="form-control" readonly name="id_user">
				<br>

				<label>Nama</label>
				<input type="text" value="<?=$list_admin->nama_user;?>" class="form-control" name="nama_user">
				<br>

				<label>Username</label>
				<input type="text" value="<?=$list_admin->username;?>" class="form-control" name="username">
				<br>

				<label>Level</label>
				<select class="form-control" name="id_level">
					<?php foreach ($list_level as $level): ?>
						<option value="<?=$level->id_level;?>"><?=$level->nama_level;?></option>
					<?php endforeach ?>
				</select>
				<br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
			<br>
			<a class="btn btn-primary" href="<?=base_url('index.php');?>/pelanggan/list_pelanggan">Kembali</a>
		</div>
	</div>
</div>