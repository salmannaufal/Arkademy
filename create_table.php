<?php
	include "koneksi2.php";
	
	$sql = "CREATE TABLE user(
		id int PRIMARY KEY,
		nama varchar(50),
		role varchar(50),
		availability varchar(50),
		age int,
		location varchar(50),
		years_experience varchar(50),
		email varchar(50)
	)";
	
	if($koneksi->query($sql) == TRUE){
		echo "tabel berhasil dibuat";
	}else{
		echo "tabel gagal dibuat";
	}
?>