        <!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?= $base_url?>">Home</a>
							<i>|</i>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Kontak</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Pesan Anda adalah motivasi bagi kami</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Alamat</h6>
								<p> Padang, Indonesia

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="arixda46@gmail.com"> arixda46@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Telepon</h6>
								<p>+6281268385301</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<form action="#" method="post">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Nama Lengakp</label>
									<input class="form-control" type="text" name="nama_testi" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">No HP</label>
									<input class="form-control" type="text" name="nohp" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Pesan</label>
									<textarea class="form-control"  name="keterangan" id="textarea" placeholder="" required=""></textarea>
								</div>
								<input class="btn btn-succ" type="submit" name="simpan" value="Submit">
							</div>
						</div>
                    </form>
                    <?php
                    if (isset($_POST['simpan'])) {
                    $query = mysqli_query($koneksi, "INSERT INTO tbl_testimoni 
					set id_testimoni='', 
					nama_testi='$_POST[nama_testi]', 
					email='$_POST[email]', 
					nohp='$_POST[nohp]', 
                    keterangan='$_POST[keterangan]'");
                    
                    echo "<script>alert('Data Berhasil Di Simpan')
					window.location='$base_url';
					</script>";
                    }
                    ?>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.196815339636!2d100.3626424!3d-0.9242686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebfa8823349070d3!2sGrand%20Mosque%20of%20West%20Sumatra!5e0!3m2!1sen!2sid!4v1606963475445!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>