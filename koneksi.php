<?php
	$user = 'localhost';
	$nim = 'root';
	$nama = '';
	$db = 'db_mhs';
	$koneksi = mysqli_connect($user, $nim, $nama, $db) or die(mysqli_error());
	if ($koneksi) {
		mysqli_select_db($koneksi, $db);
	}
	else{
		echo mysqli_error();
		mysqli_close();
	}
?>