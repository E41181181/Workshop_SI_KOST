<?php
include 'config.php';
//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = 'SELECT ID_KOS, ID_PEMILIK, NAMA_KOS, JALAN_KOS, KEC_KOS, KAB_KOS, KET_ALAMAT_KOS, JENIS_KOS, FASILITAS_KOS, FOTO_KOS, JUMLAH_KAMAR FROM tb_datakos';
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}

echo '<table>
		<thead>
			 <tr>
				<th>No Kost</th>
				<th>Pemilik</th>
                <th>Nama Kost</th>
                <th>Alamat (Jalan)</th>
				<th>Alamat (Kecamatan)</th>
                <th>Alamat (Kabupaten)</th>
                <th>Keterangan Alamat</th>
				<th>Jenis Kost</th>
                <th>Fasilitas</th>
                <th>Foto Kost</th>
				<th>Jumlah Kamar</th>							
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['ID_KOS'].'</td>
			<td>'.$row['ID_PEMILIK'].'</td>
            <td>'.$row['NAMA_KOS'].'</td>
            <td>'.$row['JALAN_KOS'].'</td>
			<td>'.$row['KEC_KOS'].'</td>
            <td>'.$row['KAB_KOS'].'</td>
            <td>'.$row['KET_ALAMAT_KOS'].'</td>
			<td>'.$row['JENIS_KOS'].'</td>
            <td>'.$row['FASILITAS_KOS'].'</td>
            <td>'.$row['FOTO_KOS'].'</td>
			<td>'.$row['JUMLAH_KAMAR'].'</td>
			</tr>';
}
echo '
	</tbody>
</table>';
?>