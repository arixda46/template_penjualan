<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <?php
            $barang = mysqli_query($koneksi, "SELECT * from tbl_barang WHERE nama_barang='$_GET[id]'");
            ?>
            <?php
            while ($data = mysqli_fetch_array($barang)) {
            ?>
                <div class="row">
                    <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">

                                <ul class="slides">
                                    <li data-thumb="<?= $base_url ?>/login/img/<?php echo $data['foto_barang']; ?>">
                                        <div class="thumb-image"> <img src="<?= $base_url ?>/login/img/<?php echo $data['foto_barang']; ?>" data-imagezoom=" true" class="img-fluid" alt=" ">
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3><?php echo $data['nama_barang']; ?></h3>
                        <p><span class="item_price">Rp. <?php echo number_format($data['harga_jual']); ?></span>
                        </p>
                        <div class="color-quality">
                            <div class="color-quality-right">
                                <h5>Stok :<?php echo $data['stok']; ?> <?php echo $data['satuan']; ?></h5>
                            </div>
                        </div>
                        <div class="occasional">
                            <h5>Deskripsi Produk :</h5>
                            <div class="colr ert">
                                <label><?php echo $data['deskripsi_barang']; ?></label>
                            </div>
                            <a target=" _blank" class="btn btn-info" href="https://wa.me/+6281268385301?text=Hello sir, I want to buy <?php echo $data['nama_barang']; ?>"> Belanja</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                <?php   }   ?>
                </div>
        </div>
</section>