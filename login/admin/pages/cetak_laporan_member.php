<?php
include "../koneksi.php";
$squ = "";
if ($_GET['status'] != "") {
    if ($_GET['status'] == 'Semua Data') {
        $squ = "ORDER BY id_member";
    } else {
        $squ = "WHERE status='$_GET[status]'";
    }
}
?>

<body onload="javascript:print()">
    <table align="center">
        <tr>
            <td><img src="../images/logo.png" width="150px" alt=""></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <h3 align="center" styl`e="margin: 0px">AS FOOTWEAR Inc.</h3>
                <h5 align="center" style="margin: 0px">West Sumatra</h5>
                <h4 align="center" style="margin-top: 0px">Laporan Data Member</h4>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%" border="1" align="center" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Member</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_member $squ");
            $cek = mysqli_num_rows($sql);
            if ($cek < 1) {
            ?>
                <tr>
                    <td colspan="13" class="p-3">Data tidak ditemukan</td>
                </tr>
                <?php
            } else {
                $no = 1;
                while ($data = mysqli_fetch_array($sql)) {
                    $sup = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_member $squ"));
                ?>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_member']; ?></td>
                    <td><?php echo $data['nohp']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    </tr>
                <?php   }   ?>
            <?php   }   ?>
        </tbody>
    </table>
    <table border="0" width="100%" align="center" cellpadding="3" cellspacing="1">
        <tr>
            <td width="63%">
                &nbsp;</td>
            <td width="37%">
                <div align="center">
                    <?php
                    $tgl =  date('d M Y');
                    echo "Padang, $tgl";
                    ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    Pimpinan
                </div>
            </td>
        </tr>
    </table>
</body>