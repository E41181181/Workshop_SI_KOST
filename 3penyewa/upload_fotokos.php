<?php
include 'config.php';
 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar'];
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['gambar']['tmp_name'], "aset_foto/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
 } 
?>