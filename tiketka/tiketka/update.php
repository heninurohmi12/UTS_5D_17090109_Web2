<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = "UPDATE tiketpemesanan SET nama = '$_POST[nama]',
                                     nama_kereta = '$_POST[nama_kereta]',
                                     no_kereta = '$_POST[no_kereta]',
                                     kelas  = '$_POST[kelas]',
									 no_kursi  = '$_POST[no_kursi]',
									 berangkat  = '$_POST[berangkat]',
									 tanggal_berangkat  = '$_POST[tanggal_berangkat]',
									 tiba  = '$_POST[tiba]',
									 tanggal_tiba  = '$_POST[tanggal_tiba]',
									 harga  = '$_POST[harga]',
                                 WHERE no_id = '$_POST[no_id]' ";
    $dbh->exec($sql);
}
header("location:index.php");
?>