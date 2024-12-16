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
		<strong class="icon-copy fa fa-plus-square" aria-hidden="true"> Tambah Konten</strong>
	</button>

	<!-- Modal Structure -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<!-- Added 'modal-dialog-centered' -->
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><strong>Tambah konten</strong></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="icon-copy fa fa-window-close"></span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/konten/simpan')?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">Judul</label>
							<input type="text" class="form-control" placeholder="Judul Konten" name="judul" required>
						</div>
						<div class="form-group">
							<label for="name">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aa){?>
								<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="name">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="name">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
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
					<th scope="col"><strong>Judul</strong></th>
					<th scope="col"><strong>Kategori konten</strong></th>
					<th scope="col"><strong>Tanggal</strong></th>
					<th scope="col"><strong>kreator</strong></th>
					<th scope="col"><strong>foto</strong></th>
					<th scope="col"><strong>Aksi</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($konten as $aa){?>
				<tr>
					<td><?= $no;?></td>
					<td><?= $aa['judul']?></td>
					<td><?= $aa['nama_kategori']?></td>
					<td><?= $aa['tanggal']?></td>
					<td><?= $aa['nama']?></td>
					<td>
						<a href="<?= base_url('aset/upload/konten/'.$aa['foto'])?>" target="_blank">
							<span class="icon-copy fa fa-search" aria-hidden="true"><strong> Lihat Foto</strong></span>
						</a>
					</td>
					<td>
						<a href="<?php echo site_url ('admin/konten/delete_data/'.$aa['foto']);?>"
							class=" btn-sm btn btn-dark"
							onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"> <span
								class="icon-copy ion-backspace">
						</a>
						<!-- Button to Open the Modal -->
						<button type="button" class="btn-sm btn btn-info" data-toggle="modal" data-target="#konten<?= $no;?>">
							<strong class="icon-copy fa fa-pencil" aria-hidden="true"></strong>
						</button>

						<!-- Modal Structure -->
						<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
							aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<!-- Added 'modal-dialog-centered' -->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><strong><?= $aa['judul']?></strong>
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true" class="icon-copy fa fa-window-close"></span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('admin/konten/update')?>" method="post"
											enctype="multipart/form-data">
											<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
											<div class="form-group">
												<label for="name">Judul</label>
												<input type="text" class="form-control" value="<?= $aa['judul']?>"
													name="judul">
											</div>
											<div class="form-group">
												<label for="name">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $uu){?>
													<option
													<?php if ($uu['id_kategori']==$aa['id_kategori']){ echo"selected" ;}?>
													value="<?= $uu['id_kategori']?>"><?= $uu['nama_kategori']?>
													</option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label for="name">Keterangan</label>
												<textarea name="keterangan" class="form-control"><?= $aa['keterangan']?></textarea>
											</div>
											<div class="form-group">
												<label for="name">Foto</label>
												<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
					</td>
				</tr>
				<?php $no++;} ?>
			</tbody>
		</table>
	</div>
</div>
</div>
