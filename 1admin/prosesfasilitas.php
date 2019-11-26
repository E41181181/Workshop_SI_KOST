<?php 
// koneksi database
include 'config.php';
 

// menangkap data yang di kirim dari form
$ukurankmr = $_POST['ukurankamar'];
$fasilitas = $_POST['check_list'];
$kamartersedia = $_POST['jmlkamar'];
$ket_lainnya = $_POST['ket_lainnya'];

 
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO tb_tipekamar VALUES ('','1', '$ukurankmr', '$fasilitas', '$kamartersedia', '$ket_lainnya', '')");
//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
//header("location:index.html");
 
?>