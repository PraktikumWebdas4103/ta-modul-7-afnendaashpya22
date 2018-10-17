<?php
	$nim = $_GET['nim'];
	include 'koneksi.php';
	$delete = mysqli_query($koneksi,"DELETE * FROM mahasiswa where nim ='$nim'");
	if ($delete) {
		header('location:lihatdata.php');
	}
	else{
		echo "<br><br>";
		echo "<center><h3>Gagal menghapus data!!!</h3></center>"; echo "<br>";
		echo "<center><h4><a href='lihatdata.php'>Kembali</a></h4></center>";
	}
?>