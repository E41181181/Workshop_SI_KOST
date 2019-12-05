<?php 
session_start();
// koneksi database
include 'config.php';
 

// menangkap data yang di kirim dari form
$idkos = $_POST['idkos'];
//$_SESSION['idkost'] = $idkos;
$ukurankmr = $_POST['ukurankamar'];
$faskam = $_POST['faskam'];
$kamartersedia = $_POST['jmlkamar'];
$ket_lainnya = $_POST['ket_lainnya'];
mysqli_query($koneksi, "INSERT INTO tb_tipekamar VALUES ('', '$idkos', '$ukurankmr', '$faskam', '$kamartersedia', '$ket_lainnya', '')");

//pembayaran
$bayarsetiap = $_POST['bayarsetiap'];
$dihuni = $_POST['dihuni'];
$hargakamar = $_POST['hargakamar'];
mysqli_query($koneksi, "INSERT INTO tb_harga VALUES ('', '10', '$bayarsetiap', '$dihuni', '$hargakamar')");


 //echo $_SESSION['idkost'];
 //echo $_SESSION['username'];
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");

//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
header("location:general_2_1.php");
 
?>