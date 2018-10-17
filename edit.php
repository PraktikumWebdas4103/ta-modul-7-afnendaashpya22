<?php
	include 'koneksi.php';
?>

<form action="" method="POST">
	<center>
		<table>
			<?php
			if (isset($_POST['submit'])) {
				$nim =$_POST['nim'];
				$simpan = mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim ='$nim'");
					while ($array = mysqli_fetch_array($simpan)){
			?>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $array['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $array['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jeniskelamin" value="<?php echo $array['jeniskelamin']; ?>"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><input type="text" name="prodi" value="<?php echo $array['prodi']; ?>"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="text" name="fakultas" value="<?php echo $array['fakultas']; ?>"></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $array['asal']; ?>"></td>
			</tr>
			<tr>
				<td>Motto</td>
				<td>:</td>
				<td><input type="text" name="motto" value="<?php echo $array['motto']; ?>"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit">
	</center>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$motto = $_POST['motto'];
		$simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jeniskelamin', '$prodi', '$fakultas', '$asal', '$motto')");
			if ($simpan) {
				header ("location: view.php?nim=$nim");
			} else {
				echo "GAGAL!!!!";
			}
	
?>