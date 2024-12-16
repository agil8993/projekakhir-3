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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
	<link href="path/to/lightbox.min.css" rel="stylesheet">



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
                <!-- Logo -->
                <a href="">
                    <img src="<?= base_url('aset/') ?>vendors/images/enak.png"
                        style="width: 135px; margin-bottom:-15px; margin-top:-15px;">
                </a>

                <!-- Menu -->
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="<?= ($this->uri->segment(1) == '' ? 'active' : '') ?>">
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="<?= ($this->uri->segment(2) == 'galeri' ? 'active' : '') ?>">
                        <a href="<?= base_url('home/galeri/') ?>">Gallery</a>
                    </li>
                    <?php foreach ($kategori as $kate) { ?>
                    <li class="<?= ($this->uri->segment(2) == 'kategori' && $this->uri->segment(3) == $kate['id_kategori'] ? 'active' : '') ?>">
                        <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                            <?= $kate['nama_kategori'] ?>
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?= base_url('auth') ?>" class="btn btn-warning">Login</a>
                    </li>
                </ul>

                <!-- Burger menu -->
                <a href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>


	<section class="gallery-block gallery-front" style="margin-top: 50px;">
		<div class="text-center text-blue mb-50" style="margin-top: 150px; margin-bottom: 50px; ">
			<h1 style="color:black; font-family:Dancing Script;">Showcase from Tawangmangu</h1>
		</div>
		<div class="container">
			<div class="row g-4">
				<?php foreach ($galeri as $aa) { ?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="gallery-image">
						<!-- Trigger modal -->
						<a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
							data-img="<?= base_url('aset/upload/galeri/' . $aa['foto_galeri']) ?>">
							<img src="<?= base_url('aset/upload/galeri/' . $aa['foto_galeri']) ?>" alt="Gambar Galeri"
								style="width: 100%; height: 350px; object-fit: cover;">
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content" style="width: 100%; height: 450px; object-fit: cover;">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="color:black;">Preview Gambar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex justify-content-center align-items-center">
					<img id="modalImage" src="" alt="Gambar Modal" class="img-fluid"
						style="width: 100%; height: 350px; object-fit: cover;">
				</div>
			</div>
		</div>
	</div>







	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-4">
					<h2 class="font-weight-bold text-primary heading">
					</h2>
				</div>

			</div>
		</div>
		<div class="container">
			<div class="row">

			</div>
		</div>
	</div>
	</div>
	</div>




	<!-- /.row -->
	<!-- /.row -->

	<div class="row mt-5">
		<div class="site-footer" style="background-color:#005555; 
					border-radius:20px; 
					box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);">
			<div class="col-10 mx-auto">
				<div class="row justify-content-around">
					<div class="col-lg-4 ">
						<div class="widget">
							<h2 style="color: #ffc107;"><?= $konfig->judul_website; ?></h2>
							<p><?= $konfig->profil_website; ?></p>
						</div>
						<!-- /.widget -->
					</div>
					<div class="col-lg-3">
						<div class="widget mb-2 mr-2">
							<h2 style="color: #ffc107;">Contac Us</h2>
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
					<div class="col-lg-3">
						<div class="widget">
							<h2 style="color: #ffc107;">Media Sosial</h2>
							<ul class="list-style" ">
							<li>
								<a href=" <?= $konfig->instagram; ?>"><span class="icon-instagram"></span> Instagram</a>
								</li>
								<li>
									<a href="<?= $konfig->tik_tok; ?>"><span class="fa-brands fa-tiktok">
											Tik Tok</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 text-center">
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

			<!-- Preloader -->

			<script src="<?= base_url('aset/fornt/') ?>js/bootstrap.bundle.min.js"></script>
			<script src="<?= base_url('aset/fornt/') ?>js/tiny-slider.js"></script>
			<script src="<?= base_url('aset/fornt/') ?>js/aos.js"></script>
			<script src="<?= base_url('aset/fornt/') ?>js/navbar.js"></script>
			<script src="<?= base_url('aset/fornt/') ?>js/counter.js"></script>
			<script src="<?= base_url('aset/fornt/') ?>js/custom.js"></script>
			<script src="path/to/lightbox.min.js"></script>
			<script>
				document.addEventListener('DOMContentLoaded', function () {
					const imageModal = document.getElementById('imageModal');
					const modalImage = document.getElementById('modalImage');

					// Tangkap semua link yang memicu modal
					document.querySelectorAll('[data-bs-target="#imageModal"]').forEach(function (trigger) {
						trigger.addEventListener('click', function () {
							const imgSrc = this.getAttribute('data-img'); // Ambil URL gambar dari data-img
							modalImage.setAttribute('src', imgSrc); // Set gambar ke dalam modal
						});
					});
				});

			</script>


</body>

</html>
