<?php
	include "../inc/koneksi.php";
	
	$id_kegiatan = $_GET['id_kegiatan'];

	$sql_cek = "SELECT * FROM tb_profil";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA KEGIATAN</title>
</head>

<body>
	<center>

		<h2>
			<?php echo $data_cek['nama_profil']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['alamat']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_kegiatan where id_kegiatan='$id_kegiatan'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA KEGIATAN</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>Judul Kegiatan</td>
				<td>:</td>
				<td>
					<?php echo $data['judul']; ?>
				</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<?php echo $data['kategori']; ?>
				</td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td>:</td>
				<td>
					<?php echo $data['deskripsi']; ?>
				</td>
			</tr>
			
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>