<?php
session_start();
//koneksi ke database kita
$koneksi= new mysqli ("localhost","root","","18nov2");

//mendapatkan id yg akan dijadikan wishlist	
$ID_KOS= $_GET['id'];
if ($_SESSION['wishlist'][$ID_KOS]=1)

echo"<pre>";
print_r($_SESSION['wishlist']);
echo"</pre>";
// membuat tampilan interface
echo "<script>alert('Kos Telah Masuk Daftar Wishlist Anda');</script>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wishlist Saya</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css" href="">
</head>
<body>
<!-- Konten-->
<nav class="navbar navbar-default">
	<div class="container">
		
		<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="carikos.php">Cari Kos</a></li>
				<li><a href="daftar.php">Daftar</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="Wishlist.php">Wishlist</a></li>
				<li><a href="Pusatbantuan.php">Pusat Bantuan</a></li>
		</ul>
	</div>	

<!-- Konten-->
<section class="konten">
	<div class="container">	
	<h1>Wishlist saya</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><center>No</th></center>
				<th><center>Nama Kos</th></center>
				<th><center>Alamat</th></center>
				<th><center>Jenis Kos</th></center>
				<th><center>Harga</th></center>
				<th><center>Fasilitas Kos</th></center>
				<th><center>Aksi</th></center>

			</tr>
		</thead>
		<tbody>
			<?php $no=1;?>
			<?php foreach ($_SESSION['wishlist'] as $ID_KOS => $jumlah) :?>
			<!--menampilkan wishlist yg sedang diperulangkan berdasarkan id produk-->
			<?php
			$ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS WHERE tb_tipekamar.ID_KOS AND tb_datakos.ID_KOS= '$ID_KOS'");
				$pecah= $ambil->fetch_assoc();
				echo"<pre>";
				print_r($pecah);
				echo"</pre>";
				?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $pecah ["NAMA_KOS"];?></td>
				<td><?php echo $pecah ["KET_ALAMAT_KOS"];?></td>
				<td><?php echo $pecah ["JENIS_KOS"];?></td>
				<td>Rp.<?php echo number_format($pecah ["HARGA"]) ;?></td>
				<td><?php echo $pecah ["FASILITAS_KOS"];?></td>
				<td><a href="hapus_wishlist.php?id=<?php echo $pecah['ID_KOS'];?>" class ="btn btn-danger">Hapus Wishlist</td></a>

			</tr>
			<?php $no++; ?>
			<?php endforeach?>
		</tbody>
	</table>
</nav>
</body>
</html>