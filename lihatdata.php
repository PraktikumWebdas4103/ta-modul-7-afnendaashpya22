<?php
	include_once 'koneksi.php';
?>
	
<form action="" method="POST">
	<center>
		<h1>LIHAT DATA MAHASISWA</h1>
		<table>
			<tr>
				<td><input type="text" name="nim" placeholder="NIM"></td>
				<td><input type="submit" name="submit" value="cari"></td>
				<td><a href="inputdata.php">Input Data</a></td>
			</tr>
		</table>
		<table border="1">
			<tr>
				<td>NIM</td>
				<td>Nama</td>
				<td>Action</td>
			</tr>

		<?php
			$simpan = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
				while ($array = mysqli_fetch_array($simpan)) {
					echo"<tr>";
					echo"<td>". $array['nim']. "</td>";
					echo"<td>". $array['nama']. "</td>";
					echo"<td>"; echo"<a href='delete.php?nim=". $array['nim']. "'>Delete</a>"; echo"</td>";
					echo"<td>"; echo"<a href='inputdata.php?nim=". $array['nim']. "'>Masukkan data lagi"; echo"</a>"; echo"</td>";
					echo"</tr>";					
				};
		?>
		</table>
		<?php
			if (isset($_POST['submit'])) {
				$nim =$_POST['nim'];
				$simpan = mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim ='$nim'");
					while ($array = mysqli_fetch_array($simpan)) {
							echo"<tr>";
							echo"<td>". $array['nim']. "</td>";
							echo"<td>". $array['nama']. "</td>";
							echo"<td></td>";
							echo"<td>"; echo"<a href='delete.php?nim=". $array['nim']. "'>Delete</a>"; echo"</td>";
							echo"</tr>";				
						};
			}
		?>
		</table>
	</center>
</form>