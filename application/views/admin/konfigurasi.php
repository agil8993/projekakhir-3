<div id="menghilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><strong><h2>Konfigurasi</h2></strong></h5>
	</div>
	<div class="modal-body">
		<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
			<div class="form-group">
				<label for="name">Judul website</label>
				<input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>">
			</div>
			<div class="form-group">
				<label for="name">Profile</label>
				<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
			</div>
			<div class="form-group">
				<label for="name">Instagram</label>
				<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
			</div>
			<div class="form-group">
				<label for="name">Tik Tok</label>
				<input type="text" class="form-control" name="tik_tok" value="<?= $konfig->tik_tok; ?>">
			</div>
			<div class="form-group">
				<label for="name">Email</label>
				<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
			</div>
			<div class="form-group">
				<label for="name">Alamat</label>
				<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
			</div>
			<div class="form-group">
				<label for="name">WhatsApp</label>
				<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
			</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
	</form>
</div>

