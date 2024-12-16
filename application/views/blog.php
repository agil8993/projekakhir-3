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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/uicons/2.0.10/css/uicons.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


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
					<li class="<?= ($this->uri->segment(2) == 'blog' ? 'active' : '') ?>">
                        <a href="<?= base_url('home/blog/') ?>">Blog</a>
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

	<div class="hero" style="position: relative; width: 100%; height: 703px; overflow: hidden;">
		<div class="hero-slide">
			<div class="carousel-item active">
				<img src="<?=base_url('aset/')?>vendors/images/blog.webp ?>"
					style="width: 100%; height: 703px; object-fit: cover;">
			</div>
		</div>
		<div class="text-center mb-50"
			style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); text-align: center;">
			<h1 class="heading" data-aos="fade-up"
				style="font-family:'Times New Roman', Times, serif; font-size:100px; color: white;">
				<?= $konfig->judul_website; ?>
			</h1>
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
        <div class="row mb-3 align-items-center"> <!-- Kurangi margin bottom pada row -->
            <div class="col-lg-4">
            </div>
            <div class="text-center text-blue mb-2"> <!-- Kurangi margin bottom -->
            </div>
            <div class="search-container"
                style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 5px;"> <!-- Kurangi margin top dan bottom -->
                <form class="form-inline position-relative" onsubmit="return false;"
                    style="max-width: 500px; width: 100%; position: relative;">
                    <div style="position: relative; width: 100%;">
                        <!-- Input field -->
                        <input class="search fs-8 bg-transparent form-control" type="search" id="searchInput"
                            name="search" placeholder="search..."
                            style="border-width: 2px; border-color: black; padding: 15px 35px 15px 40px; font-size: 18px; border-radius: 80px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%;">
                        <!-- Ikon pencarian -->
                        <div class="search-icon-left"
                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); font-size: 18px; color: black; border-width: 2px;">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <!-- Teks penjelasan -->
                    <p style="text-align: center; font-size: 14px; color: #666; margin-top: 5px;"> <!-- Kurangi ukuran font dan margin -->
                        Temukan Makanan atau Cemilan yang anda sukai dengan mudah!
                    </p>
                </form>
            </div>
        </div>
		<div class="container">
    <div class="row">
        <?php foreach ($konten as $uu) { ?>
        <div class="col-md-6 col-lg-4">
            <div class="site"
                style="height: 600px; border-radius: 15px; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); margin-bottom: 20px; overflow: hidden; background: #fff;">
                <!-- Gambar -->
                <a href="single.html" style="display: block; margin: 0; padding: 0;">
                    <img src="<?= base_url('aset/upload/konten/'.$uu['foto']) ?>"
                        style="width: 100%; height: 350px; object-fit: cover; display: block; margin: 0; border-top-left-radius: 15px; border-top-right-radius: 15px;"
                        alt="Image">
                </a>
                <!-- Konten Teks -->
                <div class="text" style="padding: 20px;">
                    <h3 class="searchable"><a href="single.html"
                            style="text-decoration: none; color: #333;"><?= $uu['judul'] ?></a></h3>
                    <p class="sched-time" style="font-size: 14px; color: #888; margin-bottom: 10px;">
                        <span><i class="fa-solid fa-layer-group"></i>
                            <?= $uu['nama_kategori'] ?></span><br>
                        <span><i class="fa fa-user"></i> <?= $uu['level'] ?></span>
                    </p>
                    <!-- Menampilkan Tanggal -->
                    <p style="font-size: 13px; color: #777; margin-bottom: 10px;">
                        <span><i class="fa fa-calendar"></i> <?= date('d F Y', strtotime($uu['tanggal'])) ?></span>
                    </p>
                    <p style="color: #555;"><?= $uu['nama']?></p>
                    <p><a href="<?= base_url('home/artikel/' . $uu['slug']) ?>"
                            class="btn btn-primary btn-sm">Read More</a></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>

	<div class="section additional-content" style="background-color: #f5f5f5; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 text-center">
                <h2 style="font-size: 24px; font-weight: bold; color: #333;">Discover More Delicious Treats</h2>
                <p style="color: #666;">Explore a variety of our special delicacies, carefully curated to satisfy your cravings.</p>
                <a href="<?= base_url('home/galeri') ?>" class="btn btn-primary">Explore Our Gallery</a>
            </div>
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
			<script>
				// Ambil elemen input pencarian dan elemen-elemen yang dapat dicari
				const searchInput = document.getElementById('searchInput');
				const searchableItems = document.querySelectorAll('.searchable');
				const container = document.querySelector('.container .row'); // Kontainer untuk hasil


				let noResultsMessage = document.createElement('div');
				noResultsMessage.textContent = 'Konten tidak ditemukan.';
				noResultsMessage.style.display = 'none';
				noResultsMessage.style.color = '#dc3545'; // Warna teks merah
				noResultsMessage.style.textAlign = 'center';
				noResultsMessage.style.marginTop = '20px';
				noResultsMessage.style.fontWeight = 'bold';
				noResultsMessage.style.fontSize = '24px'; // Ukuran teks
				noResultsMessage.style.padding = '15px';
				noResultsMessage.style.border = '2px dashed #dc3545'; // Garis batas putus-putus
				noResultsMessage.style.borderRadius = '10px'; // Membulatkan sudut
				noResultsMessage.style.backgroundColor = '#fff5f5'; // Warna latar belakang lembut
				noResultsMessage.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)'; // Bayangan
				container.appendChild(noResultsMessage);


				// Event listener untuk pencarian
				searchInput.addEventListener('input', function () {
					const filter = searchInput.value.toLowerCase().trim(); // Ubah teks input menjadi huruf kecil
					let hasResults = false; // Indikator untuk hasil pencarian

					searchableItems.forEach(item => {
						const text = item.textContent
							.toLowerCase(); // Ambil teks elemen dan ubah menjadi huruf kecil
						const parentCard = item.closest('.col-md-6.col-lg-4'); // Elemen parent kontainer
						if (text.includes(filter)) {
							parentCard.style.display = ''; // Tampilkan jika cocok
							hasResults = true;
						} else {
							parentCard.style.display = 'none'; // Sembunyikan jika tidak cocok
						}
					});

					// Tampilkan atau sembunyikan pesan "Konten tidak ditemukan."
					if (!hasResults) {
						noResultsMessage.style.display = 'block';
					} else {
						noResultsMessage.style.display = 'none';
					}
				});

			</script>
</body>

</html>
