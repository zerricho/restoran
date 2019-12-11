<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Masakan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id Masakan</label>
			<input type="text" value="<?=$list_masakan->id_masakan;?>" disabled class="form-control">
			<br>

			<label>Nama Masakan</label>
			<input type="text" value="<?=$list_masakan->nama_masakan;?>" disabled class="form-control">
			<br>

			<label>Harga</label>
			<input type="text" value="<?=$list_masakan->harga;?>" disabled class="form-control">
			<br>

			<label>Jenis</label>
			<input type="text" value="<?=$list_masakan->nama_jenis;?>" disabled class="form-control">
			<br>

			<label>Status</label>
			<input type="text" value="<?=$list_masakan->status_masakan;?>" disabled class="form-control">
			<br>

			<a class="btn btn-primary" href="<?=base_url('index.php');?>/masakan">Kembali</a>
		</div>
	</div>
</div>