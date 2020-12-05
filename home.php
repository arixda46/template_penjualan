		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Footwear Pria
								<span>Diskon Akhir Tahun 50%</span>
							</h3>
							<a href="<?= $base_url?>product" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Footwear Pria
								<span>Diskon Akhir Tahun 50%</span>
							</h3>
							<a href="<?= $base_url?>product" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>

						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!--//banner -->
			</div>
		</div>
		<!--//banner-sec-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 my-4">Produk Terbaru</h3>
					<div class="row">
						<!-- /womens -->
						<?php
						$barang = mysqli_query($koneksi, "SELECT * from tbl_barang a left join tbl_kategori b ON a.id_kategori=b.id_kategori ORDER BY id_barang DESC LIMIT 4");
						while ($data = mysqli_fetch_array($barang)) {
						?>
							<div class="col-md-3 product-men women_two">
								<div class="product-googles-info googles">
									<div class="men-pro-item">
										<img src="login/img/<?php echo $data['foto_barang']; ?>" class="img-fluid" alt="">
										<div class="men-thumb-item">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#" class="link-product-add-cart">Detail Produk</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product">
											<div class="info-product-price">
												<div class="grid_meta">
													<div class="product_price">
														<h4>
															<a href="<?= $base_url ?>detail_product/<?php echo $data['nama_barang'] ?>"><?php echo $data['nama_barang']; ?></a>
														</h4>
														<div class="grid-price mt-2">
															<span class="money ">Rp. <?php echo number_format($data['harga_jual']); ?></span>
														</div>
													</div>
												</div>
												<div class="googles single-item hvr-outline-out">

												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						<?php   }   ?>
					</div>
					<!-- /testimonials -->
					<div class="testimonials py-lg-4 py-3 mt-4">
						<div class="testimonials-inner py-lg-4 py-3">
							<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimoni</h3>
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item active">
										<div class="testimonials_grid text-center">
											<h3>
												<span>Pelanggan</span>
											</h3>
										</div>
									</div>
									<?php
									$testimoni = mysqli_query($koneksi, "SELECT * FROM tbl_testimoni ORDER BY id_testimoni DESC LIMIT 6");
									while ($data = mysqli_fetch_array($testimoni)) {
									?>
										<div class="carousel-item">
											<div class="testimonials_grid text-center">
												<h3><?php echo $data['nama_testi']; ?>
													<span>Pelanggan</span>
												</h3>
												<label><?php echo $data['email']; ?></label>
												<p><?php echo $data['keterangan']; ?></p>
											</div>
										</div>
									<?php } ?>
									<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="fas fa-long-arrow-alt-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>

									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- //testimonials -->
					<div class="row galsses-grids pt-lg-5 pt-3">
						<div class="col-lg-6 galsses-grid-left">
							<figure class="effect-lexi">
								<img src="images/banner1.jpg" alt="" class="img-fluid">
								<figcaption>
									<h3>Pilihan
										<span>Editor</span>
									</h3>
									<p> Express your style now.</p>
								</figcaption>
							</figure>
						</div>
						<div class="col-lg-6 galsses-grid-left">
							<figure class="effect-lexi">
								<img src="images/banner2.jpg" alt="" class="img-fluid">
								<figcaption>
									<h3>Pilihan
										<span>Editor</span>
									</h3>
									<p>Express your style now.</p>
								</figcaption>
							</figure>
						</div>
					</div>
					<!-- /grids -->
					<div class="bottom-sub-grid-content py-lg-5 py-3">
						<div class="row">
							<div class="col-lg-4 bottom-sub-grid text-center">
								<div class="bt-icon">

									<span class="far fa-hand-paper"></span>
								</div>

								<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Kepuasan Terjamin</h4>
								<p>Dengan produk menggunakan bahan yang nyaman dipakai dengan kualitas terbaik</p>
								<p>
									<a href="<?= $base_url?>product" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
							<div class="col-lg-4 bottom-sub-grid text-center">
								<div class="bt-icon">
									<span class="fas fa-rocket"></span>
								</div>

								<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Pengiriman Cepat</h4>
								<p>Pengiriman tercepat menggunakan expedisi terpercaya</p>
								<p>
									<a href="<?= $base_url?>product" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
							<div class="col-lg-4 bottom-sub-grid text-center">
								<div class="bt-icon">
									<span class="far fa-sun"></span>
								</div>

								<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Bahan Berkualitas</h4>
								<p>Bahan Genuine leather atau kulit asli dan permium leather</p>
								<p>
									<a href="<?= $base_url?>product" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
								</p>
							</div>
							<!-- /.col-lg-4 -->
						</div>
					</div>
					<!-- //grids -->
					<!-- /clients-sec -->
					<div class="testimonials p-lg-5 p-3 mt-4">
						<div class="row last-section">
							<div class="col-lg-3 footer-top-w3layouts-grid-sec">
								<div class="mail-grid-icon text-center">
									<i class="fas fa-gift"></i>
								</div>
								<div class="mail-grid-text-info">
									<h3>Produk Asli</h3>
									<p>Jelas asli menggunakan kulit sapi</p>
								</div>
							</div>
							<div class="col-lg-3 footer-top-w3layouts-grid-sec">
								<div class="mail-grid-icon text-center">
									<i class="fas fa-shield-alt"></i>
								</div>
								<div class="mail-grid-text-info">
									<h3>Produk Aman</h3>
									<p>Di packing dengan sekuat mungkin :P</p>
								</div>
							</div>
							<div class="col-lg-3 footer-top-w3layouts-grid-sec">
								<div class="mail-grid-icon text-center">
									<i class="fas fa-dollar-sign"></i>
								</div>
								<div class="mail-grid-text-info">
									<h3>Bayar Ditempat</h3>
									<p>Bayar ketika barang sudah datang</p>
								</div>
							</div>
							<div class="col-lg-3 footer-top-w3layouts-grid-sec">
								<div class="mail-grid-icon text-center">
									<i class="fas fa-truck"></i>
								</div>
								<div class="mail-grid-text-info">
									<h3>Pembayaran Mudah</h3>
									<p>Pembayaran mudah dengan Kartu kredit</p>
								</div>
							</div>
						</div>
					</div>
					<!-- //clients-sec -->
				</div>
			</div>
		</section>