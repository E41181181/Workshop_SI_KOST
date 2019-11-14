<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$namakost = $_POST['namakost'];
$alamatkostjalan = $_POST['alamatkostjalan'];
$alamatkostkec = $_POST['alamatkostkec'];
$alamatkostkab = $_POST['alamatkostkab'];
$jeniskost = $_POST['jeniskost'];
$jumlahkamar = $_POST['jumlahkamar'];

 
// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO datakos VALUES ('', '$namakost', '$alamatkostjalan', '$alamatkostkec', '$alamatkostkab', '$jeniskost', '$jumlahkamar')");
//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
//header("location:index.html");
 
?>