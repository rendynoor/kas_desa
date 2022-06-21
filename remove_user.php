<?php 
 include"koneksi.php";
$id_user =$_GET['id_user'];
$query = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = $id_user");
	echo "<script>document.location='?halaman=user';</script>";
?>