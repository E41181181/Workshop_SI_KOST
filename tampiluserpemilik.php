<?php
include 'config.php';
//$query = mysqli_query($koneksi,"SELECT * FROM tb_datakos");
$sql = 'SELECT id_pemilik, nama_pemilik, no_hp_pemilik 
		FROM tb_pemilik';
		
$query = mysqli_query($koneksi, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}

echo '<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Nama</th>
				<th>No HP</th>
				
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_pemilik'].'</td>
			<td>'.$row['nama_pemilik'].'</td>
			<td>'.$row['no_hp_pemilik'].'</td>			
			
		</tr>';
}
echo '
	</tbody>
</table>';
?>