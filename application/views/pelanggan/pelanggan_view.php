<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">History Pemesanan</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Tambah Pesanan</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php')?>/transaksi/add_transaksi">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Modal Header</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<select class="form-control" name="no_meja">
						          		<option value="" disabled>---- Pilih Meja ----</option>
						          		<option value="1" >Meja 1</option>
						          		<option value="2" >Meja 2</option>
						          		<option value="3" >Meja 3</option>
						          		<option value="4" >Meja 4</option>
						          		<option value="5" >Meja 5</option>
						          	</select>
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Keterangan Pesanan" name="keterangan"></textarea>
					          	</div>
					          	<br>
					          	<label> Makanan 1</label>
					          	<div class="form-group">
					          		<select class="form-control" name="masakan[]">
					          			<option value="" disabled>---- Pilih Makanan ----</option>
						          		<?php foreach ($list_masakan as $masakan): ?>
						          			<option value="<?=$masakan->id_masakan;?>"><?=$masakan->nama_masakan." - ".$masakan->nama_jenis;?></option>
						          		<?php endforeach ?>
					          		</select>
					          	</div>
					          	<br>
					          	<div class="form-group">
					          		<textarea class="form-control" placeholder="Keterangan Makanan" name="keterangan_masakan[]"></textarea>
					          	</div>
					          	<br>
					          	<div id="insert-form"></div>
					          	<button type="button" class="btn btn-primary" id="btn-tambah-masakan">Tambah Pesanan</button>
					          	<button type="button" class="btn btn-primary" id="btn-reset-masakan">Reset Makanan</button>
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<input type="hidden" id="jumlah-form" value="1">
				        	<button type="submit" class="btn btn-info">Submit</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			        </form>
			      </div>
			      
			    </div>
			    <script>
					$(document).ready(function(){
					  	$("#btn-tambah-masakan	").click(function(){
					  		var jumlah = parseInt($("#jumlah-form").val());
					  		var nextform = jumlah + 1;

					  		$("#insert-form").append(
					  			'<label> Makanan '+nextform+'</label>'+
					  			'<div class="form-group">'+
					          		'<select class="form-control" name="masakan[]">'+
					          			'<option value="" disabled>---- Pilih Makanan ----</option>'+
						          		'<?php foreach ($list_masakan as $masakan): ?>'+
						          			'<option value="<?=$masakan->id_masakan;?>"><?=$masakan->nama_masakan." - ".$masakan->nama_jenis;?></option>'+
						          		'<?php endforeach ?>'+
					          		'</select>'+
					          	'</div>'+
					          	'<br>'+
					          	'<div class="form-group">'+
					          		'<textarea class="form-control" placeholder="Keterangan Makanan" name="keterangan_masakan[]""></textarea>'+
					          	'</div>'+
					          	'<br>'
					  		);
						  	$("#jumlah-form").val(nextform);
						});

						$("#btn-reset-masakan").click(function(){
							$("#insert-form").html("");
							$("#jumlah-form").val("1");
						});
					});
				</script>
			  </div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>No Meja</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($list_transaksi as $transaksi): ?>
						<tr>
							<td><?=$no;?></td>
							<td><?=$transaksi->no_meja;?></td>
							<td><?=$transaksi->tanggal;?></td>
							<td>
								<span class="label <?php if($transaksi->status == 'pending'):?>label-warning<?php elseif($transaksi->status == 'success'):?>label-success<?php endif;?>">
                                        <?php if($transaksi->status == 'pending'):?>
                                        	Waiting Payment
                                        <?php elseif($transaksi->status == 'success'):?>
                                        	Payment Success
                                    	<?php endif;?>
                                    </span>
							</td>
							<td><?=$transaksi->total_bayar;?></td>
						</tr>
					<?php $no++;
					endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>