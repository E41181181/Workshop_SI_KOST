<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$bayarsetiap = $_POST['bayarsetiap'];
$dihuni = $_POST['dihuni'];
$hargakamar = $_POST['hargakamar'];


// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
mysqli_query($koneksi, "INSERT INTO tb_harga VALUES ('', '10', '$bayarsetiap', '$dihuni', '$hargakamar')");
//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
//header("location:index.html");




/* MASIH ERROR SAAT MENGINPUTKAN JADI PERLU MEMASUKAN VALUE ID KAMAR BARU DAPAT MENGINPUTKAN KE DATABASE



*/


?>