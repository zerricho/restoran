<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Masakan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<form action="<?=base_url('index.php');?>/masakan/proses_edit" method="post">
				<label>Id Masakan</label>
				<input type="number" value="<?=$list_masakan->id_masakan;?>" class="form-control" readonly name="id_masakan">
				<br>

				<label>Nama Masakan</label>
				<input type="text" value="<?=$list_masakan->nama_masakan;?>" class="form-control" name="nama_masakan">
				<br>

				<label>Harga</label>
				<input type="number" value="<?=$list_masakan->harga;?>" class="form-control" name="harga">
				<br>

				<label>Jenis</label>
          		<select class="form-control" name="id_jenis" readonly>
      				<option value="<?=$list_masakan->nama_jenis;?>"><?=$list_masakan->nama_jenis?></option>
          		</select>
          		<br>

				<label>Status</label>
				<select name="status_masakan" class="form-control">
					<option value="ada" <?php if($list_masakan->status_masakan == 'ada'):?>selected <?php endif;?>>Ada</option>
					<option value="tidak_ada" <?php if($list_masakan->status_masakan == 'tidak_ada'):?>selected <?php endif;?>>Tidak Ada</option>
				</select>
				<br>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
			<br>
			<a class="btn btn-primary" href="<?=base_url('index.php');?>/masakan">Kembali</a>
		</div>
	</div>
</div>