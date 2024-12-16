<div class="card-box pd-20 height-100-p mb-30">
	<div class="row align-items-center">
		<div class="col-md-4">
			<img src="<?= base_url('aset/')?>vendors/images/banner-img.png" alt="">
		</div>
		<div class="col-md-8">
			<h4 class="font-20 weight-500 mb-10 text-capitalize">
				Welcome <div class="weight-600 font-30 text-blue"><?= $this->session->userdata('nama');?></div>
			</h4>
			<p class="font-18 max-width-600"></p>
		</div>
	</div>
</div>
 <!-- Container for Horizontal Layout -->
 <div style="display: flex; gap: 20px;">

<!-- Users Card -->
<div style="display: flex; align-items: center; background-color: #1ebfae; color: white; border-radius: 10px; padding: 20px; width: 200px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
  <div style="margin-right: 15px;">
	<i class="micon dw dw-user" style="font-size: 40px;"></i>
  </div>
  <div>
	<div style="font-size: 30px; font-weight: bold;"><?php echo $jumlah_user ?></div>
	<div style="font-size: 18px;">Users</div>
  </div>
</div>

<!-- Content Card -->
<div style="display: flex; align-items: center; background-color: #30a5ff; color: white; border-radius: 10px; padding: 20px; width: 200px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
  <div style="margin-right: 15px;">
	<i class="micon dw dw-paint-brush" style="font-size: 40px;"></i>
  </div>
  <div>
	<div style="font-size: 30px; font-weight: bold;"><?php echo $jumlah_konten ?></div>
	<div style="font-size: 18px;">Konten</div>
  </div>
</div>

<!-- Categories Card -->
<div style="display: flex; align-items: center; background-color: #ffb53e; color: white; border-radius: 10px; padding: 20px; width: 200px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
  <div style="margin-right: 15px;">
	<i class="micon dw dw-diagram" style="font-size: 40px;"></i>
  </div>
  <div>
	<div style="font-size: 30px; font-weight: bold;"><?php echo $jumlah_kategori ?></div>
	<div style="font-size: 18px;">Kategori</div>
  </div>
</div>

<!-- Carousel Card -->
<div style="display: flex; align-items: center; background-color: #f9243f; color: white; border-radius: 10px; padding: 20px; width: 200px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
  <div style="margin-right: 15px;">
	<i class="micon dw dw-invoice" style="font-size: 40px;"></i>
  </div>
  <div>
	<div style="font-size: 30px; font-weight: bold;"><?php echo $jumlah_caraousel ?></div>
	<div style="font-size: 18px;">Caraousel</div>
  </div>
</div>

<!-- Gallery Card -->
<div style="display: flex; align-items: center; background-color: #6a1b9a; color: white; border-radius: 10px; padding: 20px; width: 200px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
  <div style="margin-right: 15px;">
	<i class="micon dw dw-image" style="font-size: 40px;"></i>
  </div>
  <div>
	<div style="font-size: 30px; font-weight: bold;"><?php echo $jumlah_galeri ?></div>
	<div style="font-size: 18px;">Gallery</div>
  </div>
</div>

</div>