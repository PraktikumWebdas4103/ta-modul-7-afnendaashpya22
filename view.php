<?php
	include 'koneksi.php';
?>

<form action="" method="GET">
	<center>
		<table>
			<?php
				$nim = $_GET['nim'];
				$simpan = "SELECT * FROM 'mahasiswa' WHERE nim = '$nim'";
				$data = mysqli_query($koneksi,$simpan);
				while ($array = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><?php echo $array['nim']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $array['nama']; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $array['jeniskelamin']; ?></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><?php echo $array['prodi']; ?></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><?php echo $array['fakultas']; ?></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><?php echo $array['asal']; ?></td>
			</tr>
			<tr>
				<td>Motto</td>
				<td>:</td>
				<td><?php echo $array['motto']; ?></td>
			</tr>
		<?php } ?>
		</table>
		<td>
			<a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
		</td>
	</center>
</form>