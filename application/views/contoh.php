<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Untree.co" />
	<link rel="shortcut icon" href="<?= base_url('aset/fornt/') ?>favicon.png" />

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
		rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url('aset/fornt/') ?>fonts/icomoon/style.css" />
	<link rel="stylesheet" href="<?= base_url('aset/fornt/') ?>fonts/flaticon/font/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/')?>vendors/styles/icon-font.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url('aset/fornt/') ?>css/tiny-slider.css" />
	<link rel="stylesheet" href="<?= base_url('aset/fornt/') ?>css/aos.css" />
	<link rel="stylesheet" href="<?= base_url('aset/fornt/') ?>css/style.css" />

	<title>
		<?= $title ?>
	</title>
</head>

<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="<?= base_url('admin/home/')?>">
						<img src="<?= base_url('aset/')?>vendors/images/abc.png"
							style="width: 135px; margin-bottom:-15px;  margin-top:-15px;">
					</a>
					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="<?= base_url()?>">Home</a></li>
						<?php foreach ($kategori as $kate) {?>
						<li class="has-children">
							<a href="properties.html">Kategori</a>
							<ul class="dropdown">
								<li><a href="<?= base_url('home/kategori/'.$kate['nama_kategori'])?>">
										<?= $kate['nama_kategori'] ?></a></li>
								<li class="has-children"></li>
							</ul>
						</li>
						<?php }?>
						<li><a href="contact.html">Contact Us</a></li>
						<a href="<?= base_url('auth')?>" class="btn btn-warning">Login</a>
					</ul>

					<a href="#"
						class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
						data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="hero">
		<div class="hero-slide">
			<?php foreach ($caraousel as $aa) {?>
			<div class="img overlay">
				<div class="carousel-item active">
					<img src="<?= base_url('aset/upload/caraousel/' . $aa['foto']) ?>" class="" style=" width: 100%;
						height: 703px; 
						object-fit: cover;">
				</div>
			</div>
			<?php }?>
		</div>
	</div>


	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center">
			</div>
		</div>
	</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-4">
					<h2 class="font-weight-bold text-primary heading">
						<h3 class="heading" data-aos="fade-up"><?= $konfig->judul_website; ?></h3>
					</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p>
						<a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a>
					</p>
				</div>
				<div class="text-center text-blue">
					<h2>Articles From Blog</h2>
				</div>
			</div>

			<div class="row" >
			 <?php foreach ($konten as $uu) {?>
				<div class="col-4 ">
					<div class="property-slider-wrap" >
							<div class="property-item">
								<a href="property-single.html" class="img">
									<img src="<?= base_url('aset/upload/konten/'.$uu['foto'])?>" alt="Image"
										class="img-fluid" style=" width: 100%;
										height:400px;
										object-fit: cover;"style="display: flex;">
								</a>
								<div class="property-content">
									<div class="price mb-2"><span><?= $uu['level']?></span></div>
									<div>
										<span class="d-block mb-2 text-black-50"><?= $uu['nama']?></span>
										<span class="city d-block mb-3"><?= $uu['judul']?></span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption"><?= $uu['nama_kategori']?></span>
											</span>
										</div>

										<a href="<?= base_url('home/artikel/'.$uu['slug'])?>" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>

							</div>
							
						</div>
					</div>
				</div>
				<?php }?>
			</div>
							<!-- .item -->
		<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
			<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
			<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
		</div>
			
		</div>
	</div>

	<!-- /.row -->
	<div class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="widget">
						<h2><?= $konfig->judul_website; ?></h2>
						<p><?= $konfig->profil_website; ?></p>
					</div>
					<!-- /.widget -->
				</div>
				<div class="col-lg-4">
					<div class="widget">
						<h2>Media Sosial</h2>
						<ul class="list-style" ">
							<li>
								<a href="<?= $konfig->instagram; ?>"><span class="icon-instagram"></span> Instagram</a>
							</li>
							<li>
								<a href="<?= $konfig->tik_tok; ?>"><span class="fa-brands fa-tiktok"> Tik Tok</span></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget mb-2 mr-2">
						<h2>Contac Us</h2>
						<h5 class="icon-copy ion-at"> Email</h5>
						<p><?= $konfig->email; ?></p>
					</div>
					<div class="widget mb-2 mr-2">
						<h5 class="icon-copy ion-location"> Alamat</h5>
						<p><?= $konfig->alamat; ?></p>
					</div>
					<div class="widget mb-2 mr-2">
						<h5 class="icon-copy ion-social-whatsapp"> WhatsApp</h5>
						<p>+<?= $konfig->no_wa; ?></p>
					</div>
				</div>
				<!-- /.col-lg-4 -->
				<!-- /.col-lg-4 -->
			</div>
			<!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

					<p>
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());

						</script>
						. All Rights Reserved. &mdash; Designed with love by
						<a href="https://untree.co">Untree.co</a>
						<!-- License information: https://untree.co/license/ -->
					</p>
					<div>
						Distributed by
						<a href="https://themewagon.com/" target="_blank">themewagon</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.site-footer -->

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= base_url('aset/fornt/') ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('aset/fornt/') ?>js/tiny-slider.js"></script>
	<script src="<?= base_url('aset/fornt/') ?>js/aos.js"></script>
	<script src="<?= base_url('aset/fornt/') ?>js/navbar.js"></script>
	<script src="<?= base_url('aset/fornt/') ?>js/counter.js"></script>
	<script src="<?= base_url('aset/fornt/') ?>js/custom.js"></script>
</body>

</html>	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<img src="<?= base_url('aset/upload/konten/'.$konten->foto);?>" style="width: 100%;
						height: 703px; 
						object-fit: cover;" />
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 class="heading text-primary"><?= $konten->judul; ?></h2>
					<p class="meta"><?= $konten->nama; ?>, <?= $konten->nama_kategori; ?></p>
					<p class="text-black-50">
						<?= $konten->keterangan; ?>.
					</p>
				</div>
			</div>
		</div>
	</div>

	<img src="<?= base_url('aset/')?>vendors/images/rendang.jpg" style=" width: 100%;
						height: 703px; 
						object-fit: cover;">
						<h2>Selamat Datang di halaman Dashboard</h2>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card tale-bg">
				<div class="card-people mt-auto">
					<img src="<?= base_url('assets/skydash')?>/images/dashboard/people.svg" alt="people">
					<div class="weather-info">
						<div class="d-flex">
							<div>
								<h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>27<sup>C</sup></h2>
							</div>
							<div class="ml-2">
								<h4 class="location font-weight-normal">Karanganyar</h4>
								<h6 class="font-weight-normal">Indonesia</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin transparent">
			<div class="row">
				<div class="col-md-6 mb-4 stretch-card transparent">
					<div class="card card-tale">
						<div class="card-body">
							<p class="mb-4"><?= $this->session->userdata('level') ?></p>
							<p class="fs-30 mb-2"><?= $this->session->userdata('nama') ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-4 stretch-card transparent">
					<div class="card card-dark-blue">
						<div class="card-body">
							<p class="mb-4">Total User</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_user ?></p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
					<div class="card card-light-blue">
						<div class="card-body">
							<p class="mb-4">Total Kategori Konten</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_kategori ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 stretch-card transparent">
					<div class="card card-light-danger">
						<div class="card-body">
							<p class="mb-4">Total Konten</p>
							<p class="fs-30 mb-2"><?php echo $jumlah_konten ?></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
dashboard.php

	