<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
session_start();
$username = $_SESSION['username'];
$namakost = $_POST['namakost'];
$alamatkostjalan = $_POST['alamatkostjalan'];
$alamatkostkec = $_POST['alamatkostkec'];
$alamatkostkab = $_POST['alamatkostkab'];
$alamatkostket = $_POST['alamatkostket'];
$jeniskost = $_POST['jeniskost'];
$fasilitaskos = $_POST['fasilitaskos'];
$fotokos = $_POST['fotokos'];
$jumlahkamar = $_POST['jumlahkamar'];

//test panggil
/*         
echo $_SESSION['username']; 
echo $namakost;  
echo $alamatkostjalan;  
echo $alamatkostkec  ;  
echo $alamatkostkab;
echo $jeniskost;
echo $fasilitaskos;  
echo $jumlahkamar;
*/

// menginput data ke database
//mysqli_query($koneksi,"insert into tabel_pemilik values('$idpemilik','$password','$nama','$alamatjalan','$alamatkec','$alamatkab','$notelp','$email','$fotoktp')");
//mysqli_query($koneksi, "INSERT INTO tb_datakos VALUES ('', '', '$namakost', '$alamatkostjalan', '$alamatkostkec', '$alamatkostkab', '$alamatkostket', '$jeniskost','$fasilitaskos', '$jumlahkamar')");
//INSERT INTO `datakos` (`kodedtkls`, `namakos`, `jalan`, `kec`, `kab`, `jeniskos`, `jumlahkamar`) VALUES (NULL, 'putra', 'mastrip', 'tegal gede', 'jember', 'putra', '12');
// mengalihkan halaman kembali ke index.php
header("location:general_2.php");
//INSERT INTO tb_datakos (`ID_KOS`, `ID_PEMILIK`, `NAMA_KOS`, `JALAN_KOS`, `KEC_KOS`, `KAB_KOS`, `KET_ALAMAT_KOS`, `JENIS_KOS`, `FASILITAS_KOS`, `FOTO_KOS`, `JUMLAH_KAMAR`) VALUES ('', '', '$namakost', '$alamatkostjalan', '$alamatkostkec', '$alamatkostkab', '$alamatkostket', '$jeniskost', '$fasilitaskos, '$fotokos', '$jumlahkamar')");
//mysqli_query($koneksi,"INSERT INTO tb_datakos VALUES (``, ``, `$namakost`, `$alamatkostjalan`, `$alamatkostkec`, `$alamatkostkab`, `$alamatkostket`, `$jeniskost`, `$fasilitaskos`, ``, `$jumlahkamar`)");
mysqli_query($koneksi,"INSERT INTO tb_datakos VALUES ('', '$username', '$namakost', '$alamatkostjalan', '$alamatkostkec', '$alamatkostkab', '$alamatkostket', '$jeniskost', '$fasilitaskos', '$fotokos', '$jumlahkamar')");

?>