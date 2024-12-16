<div id="menghilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-xxl-6" >
	<!-- File input -->
	<div class="card">
	<form action="<?= base_url('admin/galeri/simpan')?>" method="post" enctype="multipart/form-data">
		<h1 class="card-header">galeri</h1>
		<div class="card-body">
			<div class="mb-3">
				<label for="name">Judul</label>
				<input type="text" class="form-control" placeholder="Judul foto" name="judul" required>
			</div>
			<div class="mb-3">
				<label for="formFile" class="form-label">Pilih Foto deangan ukuran (1:3)</label>
				<input class="form-control" type="file" name="foto" accept="image/png, image/jpeg">
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
	</form>
</div>
<div class="row d-flex flex-wrap">
    <?php foreach ($galeri as $aa) { ?>
        <div class="col-md-4 mb-3 mt-3">
            <!-- Tambahkan class h-100 untuk kartu -->
            <div class="card h-100" style="border-radius: 15px; overflow: hidden;">
                <!-- Gambar -->
                <img class="card-img-top" 
                     src="<?= base_url('aset/upload/galeri/' . $aa['foto_galeri']) ?>" 
                     style="height: 200px; object-fit: cover; border-top-left-radius: 15px; border-top-right-radius: 15px;" />
                <!-- Konten Kartu -->
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title" style="font-size: 18px; margin-bottom: 10px;"><?= $aa['judul'] ?></h2>
                    <a href="<?php echo site_url('admin/galeri/delete_data/' . $aa['foto_galeri']); ?>" 
                       class="btn-sm btn btn-dark mt-auto"
                       onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        <span class="icon-copy ion-backspace"></span> Hapus
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
