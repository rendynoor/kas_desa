<?php
$hostname ="localhost";
$username ="root";
$password ="";
$database ="db_kas";

$koneksi =mysqli_connect($hostname,$username,$password,$database);

if($koneksi){
	//echo "database terhubung";
}
else{
	echo "database gagal terhubung";
}

	?>