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
					<strong class="icon-copy fa fa-plus-square" aria-hidden="true"> Tambah Kategori</strong>
				</button>

				<!-- Modal Structure -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<!-- Added 'modal-dialog-centered' -->
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Kategori</strong></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true" class="icon-copy fa fa-window-close"></span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/kategori/simpan')?>" method="post">
									<div class="form-group">
										<label for="name">Name Kategori</label>
										<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required>
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
						<h4 class="text-Red h2" style="font-family: Faculty Glyphic;">Kategori Konten</h4>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"><strong>No</strong></th>
								<th scope="col"><strong>Nama Kategori Konten</strong></th>
								<th scope="col"><strong>Aksi</strong></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach($kategori as $aa){?>
							<tr>
								<td><?= $no;?></td>
								<td><?= $aa['nama_kategori']?></td>
								<td>
									<a class=" btn-sm btn btn-dark"
										onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
										href="<?= base_url('admin/kategori/delete/'.$aa['id_kategori']) ?>">
										<i class="icon-copy ion-backspace"></i>
									</a>
									<button type="button" class=" btn-sm btn btn-info" data-toggle="modal"
										data-target="#edit<?= $aa['id_kategori']?>">
										<i class="icon-copy fa fa-pencil"></i>
									</button>
									<div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<!-- Added 'modal-dialog-centered' -->
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><strong>Perbarui nama
															kategori</strong></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"
														data-target="#edit">
														<span aria-hidden="true>">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="<?= base_url('admin/kategori/update')?>" method="post">
														<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
														<div class="form-group">
															<label for="name">Nama Kategori</label>
															<input type="text" class="form-control" placeholder="Nama kategori"
																value="<?= $aa['nama_kategori']?>" required name="nama_kategori">
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
								</td>
							</tr>
							<?php $no++;} ?>
						</tbody>
					</table>
				</div>
