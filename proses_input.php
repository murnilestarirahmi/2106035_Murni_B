<?php

/* Membuat koneksi dengan MySQL */
$koneksi = mysqli_connect("localhost", "root", "", "2106035_murni");

/* periksa koneksi, jika tidak terkoneksi maka tampilkan pesan gagal */
if (!$koneksi) {
    echo "<script>alert('koneksi database gagal')</script>";
}

$nmpemilik = $_POST['nmpemilik'];
$tgllahir = $_POST['tgllahir'];
$nowa = $_POST['nowa'];
$ktgrhewan = $_POST['ktgrhewan'];
$nmhewan = $_POST['nmhewan'];
$usiahewan = $_POST['usiahewan'];
$jkhewan = $_POST['jkhewan'];
$wrnhewan = $_POST['wrnhewan'];
$rashewan = $_POST['rashewan'];
$layanan = $_POST['layanan'];
$keluhan = $_POST['keluhan'];


/* mendefinisikan query */
$query = "INSERT INTO pasien VALUES(NULL, '$nmpemilik', '$tgllahir', '$nowa', '$ktgrhewan', '$nmhewan', '$usiahewan', '$jkhewan', '$wrnhewan', '$rashewan', '$layanan', '$keluhan')";

/* mengeksekusi query */
mysqli_query($koneksi, $query);

/* kembali lagi ke halaman index.php */
header('Location: ./index.php');

exit;
