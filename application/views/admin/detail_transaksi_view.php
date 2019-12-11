<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Transaksi</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<label>Id order</label>
			<input type="text" value="<?=$list_order->id_order;?>" disabled class="form-control">
			<br>

			<label>No Meja</label>
			<input type="text" value="<?=$list_order->no_meja;?>" disabled class="form-control">
			<br>

			<label>Tanggal</label>
			<input type="text" value="<?=$list_order->tanggal;?>" disabled class="form-control">
			<br>

			<label>Keterangan</label>
			<textarea disabled class="form-control"><?=$list_order->keterangan;?></textarea>
			<br>

			<label>Status</label>
			<input type="text" value="<?=$list_order->status;?>" disabled class="form-control">
			<br>

			<label>Admin</label>
			<input type="text" value="<?=$list_order->nama_user;?>" disabled class="form-control">
			<br>

			<label>Pelanggan</label>
			<input type="text" value="<?=$list_order->nama;?>" disabled class="form-control">
			<br>

			<label>Total Bayar</label>
			<input type="text" value="<?=$list_order->total_bayar;?>" disabled class="form-control">
			<br>

			<?php $no = 1;
			foreach ($list_detail_order as $detail): ?>
				<label>Masakan <?=$no;?></label>
				<input type="text" value="<?=$detail->nama_masakan;?> - <?=$detail->nama_jenis;?>" disabled class="form-control">
				<br>

				<label>Keterangan Makanan</label>
				<textarea disabled class="form-control"><?=$detail->keterangan;?></textarea>
				<br>
			<?php $no++;
			endforeach ?>


			<a class="btn btn-primary" href="<?=base_url('index.php');?>/transaksi">Kembali</a>
		</div>
	</div>
</div>