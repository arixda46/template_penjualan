<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>AS FOOTWEAR Inc.</title>
	<link rel="shortcut icon" type="image/css" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?= $base_url?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="<?= $base_url?>/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="<?= $base_url?>/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= $base_url?>/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="<?= $base_url?>/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?= $base_url?>/css/owl.theme.css" type="text/css" media="all">
	<link href="<?= $base_url?>/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?= $base_url?>/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
	</div>
	<div class="search">
		<div class="mobile-nav-button">
			<button id="trigger-overlay" type="button">
				<i class="fas fa-search"></i>
			</button>
		</div>
		<!-- open/close -->
		<div class="overlay overlay-door">
			<button type="button" class="overlay-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<form action="#" method="post" class="d-flex">
				<input class="form-control" type="search" placeholder="Search here..." required="">
				<button type="submit" class="btn btn-primary submit">
					<i class="fas fa-search"></i>
				</button>
			</form>

		</div>
		<!-- open/close -->
	</div>
	<label class="top-log mx-auto"></label>
	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

		<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">

			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav nav-mega mx-auto">
				<li class="nav-item active">
					<a class="nav-link ml-lg-0" href="<?= $base_url?>">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $base_url?>about">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $base_url?>product">Produk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= $base_url?>kontak">Kontak</a>
				</li>
			</ul>

		</div>
	</nav>
	</header>
	<!-- //header -->
	<?php
	include "content.php";
	?>
	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Tentang Kami</h3>
					</div>
					<div class="footer-text">
						<p>Brand Produk lokal kualitas import dibuat dengan bahana 100% Genuin leather tahan lama dan berkualitas serta nyamamn dipakai.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Lebih Dekat</h3>
					</div>
					<div class="contact-info">
						<h4>Lokasi :</h4>
						<p>Padang - Pariaman, Sumatera Barat</p>
						<div class="phone">
							<h4>Kontak :</h4>
							<p>Telepon :<a href="tel:+6281268385301">+6281268385301</a></p>
							<p>Email :<a href="mailto:arixda46.com">arixda46@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Langgan Untuk Penawaran</h3>
					</div>
					<div class="footer-text">
						<p>Dengan berlangganan milis kami, Anda akan selalu mendapatkan berita dan update terbaru dari kami.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Masukan email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Link Web Partner</h3>
					</div>
					<ul class="links">
						<li>
							<a href="#">Eyewear</a>
						</li>
						<li>
							<a href="#">Helmet</a>
						</li>
						<li>
							<a href="#">Fashion</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2020 AS FOOTWEAR Inc. All Rights Reserved | Design by
					<a href="#"> Ari </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="<?= $base_url?>/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div> -->
	<script>
		$(document).ready(function() {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="<?= $base_url?>/js/modernizr-2.6.2.min.js"></script>
	<script src="<?= $base_url?>/js/classie-search.js"></script>
	<script src="<?= $base_url?>/js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="<?= $base_url?>/js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function(evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function() {
			$(".button-log a").click(function() {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function() {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="<?= $base_url?>/js/simplyCountdown.js"></script>
	<link href="<?= $base_url?>/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="<?= $base_url?>/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<script src="<?= $base_url?>/js/move-top.js"></script>
	<script src="<?= $base_url?>/js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->

	<script src="<?= $base_url?>/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>