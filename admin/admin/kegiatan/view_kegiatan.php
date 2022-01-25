<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_kegiatan WHERE id_kegiatan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail kegiatan</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>ID</b>
							</td>
							<td>:
								<?php echo $data_cek['id_kegiatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Judul Kegiatan</b>
							</td>
							<td>:
								<?php echo $data_cek['judul']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Deskripsi</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kategori</b>
							</td>
							<td>:
								<?php echo $data_cek['kategori']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-kegiatan" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-kegiatan.php?id_kegiatan=<?php echo $data_cek['id_kegiatan']; ?>" target=" _blank"
					 title="Cetak Data kegiatan" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Kegiatan
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/kegiatan/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['judul']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>