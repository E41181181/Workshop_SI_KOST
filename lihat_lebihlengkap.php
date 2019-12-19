<?php
session_start();
//koneksi ke database kita
$koneksi= new mysqli ("localhost","root","","11des");
?>
<!DOCTYPE html>
<html>
<head>
	<title>KOS</title>
	<link rel="stylesheet" href="admin/assets/css/bootsrap.css" >
</head>
<body>
<!--nav bar-->
<nav class="navbar navbar-default">
	<div class="container">
		
		<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="carikos.php">Cari Kos</a></li>
				<li><a href="daftar.php">Daftar</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="kos favorit.php">Wishlist</a></li>
				<li><a href="Pusatbantuan.php">Pusat Bantuan</a></li>
		</ul>
	</div>		
</nav>
<!-- Konten-->
<section class="konten">
	<div class="container">

		<div class="row">
			
		<?php
		
		 $ambil=$koneksi->query("SELECT * FROM tb_datakos INNER JOIN tb_tipekamar ON tb_datakos.ID_KOS = tb_tipekamar.ID_KOS INNER JOIN tb_harga WHERE tb_tipekamar.ID_KAMAR = tb_harga.ID_KAMAR AND  tb_datakos.ID_KOS='$_GET[id]'");
		$detail_perkos= $ambil->fetch_assoc();
		?>
		<!--<pre><?php print_r($detail_perkos); ?></pre>-->
			<div class="caption">
			
			<p><tr><center><?php echo $detail_perkos['NAMA_KOS'];?></tr></center></p>
			<center><?php echo "<img src='aset_fot/".$detail_perkos['FOTO_KOS']."' width='500px' height='300px'/>";?></center>
			<table>
			<tr>
				<td><b><h3>Detail kos</b><td></h3></tr>
			<tr>
				<td>Jalan</td>
				<td> :</td>
				<td><?php echo $detail_perkos['JALAN_KOS'];?></td></tr><br>
			<tr>
				<td>kecamatan</td>
				<td> :</td>
				<td><?php echo $detail_perkos['KEC_KOS'];?></td> </tr><br>
			<tr>
				<td>Kabupaten </td>
				<td>:</td>
				<td><?php echo $detail_perkos['KAB_KOS'];?></td></tr><br>
			<tr>
				<td>Alamat kos </td>
				<td>:</td>
				<td><?php echo $detail_perkos['KET_ALAMAT_KOS'];?></td></tr><br>
			<tr>
				<td>Jenis kos</td>
				<td> :</td>
				<td><?php echo $detail_perkos['JENIS_KOS'];?></td></tr><br>
			<tr>
				<td>Fasilitas kos </td>
				<td>:</td>
				<td><?php echo $detail_perkos['FASILITAS_KOS'];?></td></tr><br>
			<tr>
				<td>Jumlah kamar</td>
				<td> :</td>
				<td><?php echo $detail_perkos['JUMLAH_KAMAR'];?></td></tr><br>
			<tr>
				<td><b><h3>Detail Kamar</b><td></h3></tr>
			<tr>
				<td>Ukuran Kamar</td>
				<td> : </td>
				<td><?php echo $detail_perkos['UKURAN_KAMAR'];?></td></tr><br>
			<tr>
				<td>Fasilitas Kamar</td> 
				<td>:</td>
				<td><?php echo $detail_perkos['FASILITAS_KAMAR'];?></td></tr><br>
			<tr>
				<td>Stok Kamar</td>
				<td>:</td>
				<td><?php echo $detail_perkos['STOK_KAMAR'];?></td></tr><br>
			<tr>
				<td><b><h3>Detail Harga</b><td></h3></tr>
			<tr>
				<td>Harga</td> 
				<td>:</td>
				<td>Rp.<?php echo number_format( $detail_perkos['HARGA']);?></td></tr><br>
			<tr>
				<td>Pembayaran Setiap </td>
				<td>:</td>
				<td><?php echo $detail_perkos['DIBAYAR_SETIAP'];?></td></tr><br>
			<tr>
				<td>Penghuni</td>
				<td> :</td>
				<td><?php echo $detail_perkos['PENGHUNI'];?></td></tr><br>
			<tr>
				<td>Peraturan Kos</td>
				<td>:</td>
				<td><?php echo $detail_perkos['KETERANGAN'];?></td></tr><br>
			</table><br>
			<a href="sewa.php?id=<?php echo $detail_perkos['ID_KOS']; ?>" class="btn btn-Danger">Sewa</a>
			<a href="tanya_pemilik.php?id=<?php echo $detail_perkos['ID_KOS']; ?>" class="btn btn-info">Tanyak Pemilik</a>
			<a href="wishlist.php?id=<?php echo $detail_perkos['ID_KOS'];?>" class="btn btn-info">Wishlist</a>

						</div>
						
				</div>
			</div>
			

		</div>
	</div>
</section>


</body>
</html>