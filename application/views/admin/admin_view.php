<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Admin</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"><span class="fa fa-plus"></span> Tambah Admin</button>

			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			      	<form method="post" action="<?=base_url('index.php');?>/admin/add_admin">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Modal Header</h4>
				        </div>
				        <div class="modal-body">
				        	<div class="panel-body">
					          	<div class="form-group">
					          		<input type="text" name="username" placeholder="username" class="form-control">
					          	</div>
					          	<br> 
					          	<div class="form-group">
					          		<input type="text" name="password" placeholder="password" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<input type="text" name="nama_user" placeholder="nama" class="form-control">
					          	</div>
					          	<div class="form-group">
					          		<select name="id_level" class="form-control" readonly>
					          			<option value="2">Admin</option>
					          		</select>
					          	</div>
					          	<br> 
					        </div>
				        </div>
				        <div class="modal-footer">
				        	<button type="submit" class="btn btn-primary">Submit</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
			        </form>
			      </div>
			      
			    </div>
			  </div>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($list_admin as $admin) {
						?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$admin->nama_user;?></td>
								<td><?=$admin->username;?></td>
								<td>
									<span class="label <?php if($admin->nama_level == 'superadmin'):?>label-success<?php elseif($admin->nama_level == 'admin'):?>label-warning<?php endif;?>">
                                        <?=$admin->nama_level;?>
                                    </span>
                                </td>
								<td>
									<a href="<?=base_url("index.php");?>/admin/detail_admin/<?=$admin->id_user;?>" class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/admin/edit_admin/<?=$admin->id_user;?>" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-lg"></i></a>

									<a href="<?=base_url("index.php");?>/admin/delete_admin/<?=$admin->id_user;?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-lg"></i></a>
								</td>
							</tr>
						<?php
						$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>