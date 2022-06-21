<?php 
 include"koneksi.php";
$id =$_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM kas WHERE id = $id");
	echo "<script>document.location='?halaman=kas_keluar';</script>";
?>