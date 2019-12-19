<?php
//$nama ="SELECT nama_pemilik FROM tb_pemilik where id_pemilik = '".$_SESSION['username']"'"; 
//echo $nama;

include 'config.php';
session_start();

$data = mysqli_query($koneksi,"SELECT nama_pemilik, no_hp_pemilik, email_pemilik FROM tb_pemilik where id_pemilik = '".$_SESSION['username']."' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nama_pemilik']; ?></td></br>
				<td><?php echo $d['no_hp_pemilik']; ?></td></br>
				<td><?php echo $d['email_pemilik']; ?></td></br>
				
				<td>
					<a href="edit.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
				</td>
            </tr>
            </br>
            </br>
			<?php 
        }        
		?>
<?php 
$datakos = mysqli_query($koneksi,"SELECT nama_kos, jalan_kos, kec_kos, kab_kos, ket_alamat_kos, jenis_kos, fasilitas_kos, jumlah_kamar FROM tb_datakos where tb_datakos.id_pemilik = '".$_SESSION['username']."' ");
while($c = mysqli_fetch_array($datakos)){
    ?>
    <tr>
				<td><?php echo $c['nama_kos']; ?></td></br>
				<td><?php echo $c['jalan_kos']; ?></td></br>
                <td><?php echo $c['kec_kos']; ?></td></br>
                <td><?php echo $c['kab_kos']; ?></td></br>
                <td><?php echo $c['ket_alamat_kos']; ?></td></br>
				<td><?php echo $c['jenis_kos']; ?></td></br>
                <td><?php echo $c['fasilitas_kos']; ?></td></br>
                <td><?php echo $c['jumlah_kamar']; ?></td></br>
				
				<td>
					<a href="edit.php?id=<?php echo $c['id_user']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $c['id_user']; ?>">HAPUS</a>
				</td>
            </tr>
            </br>
            </br>
            </br>
			<?php 
        }        
        ?>
        

        <?php 
        $coba = $_SESSION['username'];
        echo $coba;
        
        
        
        
        
        
        
        
        ?>