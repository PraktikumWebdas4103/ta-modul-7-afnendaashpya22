<?php
	session_start();
	include 'koneksi.php';
	if (isset($_SESSION['nim'])) {
		header(' ');
	}
?>
<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$motto = $_POST['motto'];
	}
?>

<form action="" method="POST">
	<center>
		<h1>INPUT DATA MAHASISWA</h1>
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki</td>
				<td><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="mi">D3 Manajemen Informatika</option>
					<option value="ka">D3 Komputerisasi Akuntansi</option>
					<option value="tk">D3 Teknik Komputer</option>
					<option value="sm">D4 Sistem Multimedia</option>
				</select></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="fit">Ilmu Terapan</option>
					<option value="fri">Rekayasa Industri</option>
					<option value="fte">Teknik Elektro</option>
					<option value="fif">Teknik Informatika</option>
				</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Motto Hidup</td>
				<td>:</td>
				<td><textarea name="motto"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Simpan"><a href="lihatdata.php"></td>
			</tr>
		</table>
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
			$_SESSION['nim'] = $nim;
			header('location:lihatdata.php');
		}
	}
?>