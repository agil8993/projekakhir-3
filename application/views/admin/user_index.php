<div id="menghilang">
	<?= $this->session->flashdata('alert')?>
</div>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Centered Bootstrap 4 Modal</title>
	<!-- Bootstrap 4 CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
		style="margin-bottom: 20px;">
		<strong class="icon-copy ion-person-add"> Tambah User</strong>
	</button>

	<!-- Modal Structure -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<!-- Added 'modal-dialog-centered' -->
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><strong>Tambah User</strong></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="icon-copy fa fa-window-close"></span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/user/simpan')?>" method="post">
						<div class="form-group">
							<label for="name">Username</label>
							<input type="text" class="form-control" placeholder="Username" name="username" required>
						</div>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" placeholder="Nama" name="nama" required>
						</div>
						<div class="form-group">
							<label for="name">Password</label>
							<input type="password" class="form-control" placeholder="password" name="password" required>
						</div>
						<div class="form-group">
							<label for="name">level</label>
							<select name="level" class="form-control">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap 4 JS and dependencies (jQuery and Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-Red h2" style="font-family: Faculty Glyphic;">Tabel User <i class="icon-copy dw dw-user1"></i></h4>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col"><strong>Username</strong></th>
					<th scope="col"><strong>Nama</strong></th>
					<th scope="col"><strong>Level</strong></th>
					<th scope="col"><strong>Aksi</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($user as $aa){?>
				<tr>
					<td><?= $aa['username']?></td>
					<td><?= $aa['nama']?></td>
					<td><?= $aa['level']?></td>
					<td>
						<a class="btn-sm btn btn-dark" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
							href="<?= base_url('admin/user/delete/'.$aa['id_user']) ?>">
							<i class="icon-copy ion-backspace"></i>
						</a>
						<button type="button" class="btn-sm btn btn-info" data-toggle="modal"
							data-target="#edit<?= $aa['id_user']?>">
							<i class="icon-copy fa fa-pencil"></i>
						</button>
						<div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<!-- Added 'modal-dialog-centered' -->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><strong>Prebarui nama
												user</strong></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"
											data-target="#edit">
											<span aria-hidden="true>">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('admin/user/update')?>" method="post">
											<input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
											<div class="form-group">
												<label for="name">Username</label>
												<input type="text" class="form-control" placeholder="Username"
													value="<?= $aa['username']?>" readonly>
											</div>
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" placeholder="Nama"
													value="<?= $aa['nama']?>" required name="nama">
											</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-secondary"
											data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
									</form>
								</div>
							</div>
						</div>
				</div>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
