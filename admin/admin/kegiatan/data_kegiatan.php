<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kegiatan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kegiatan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Kegiatan</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>Judul Kegiatan</th>
						<th>Kategori</th>
						<th>Deskripsi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  
			  $sql = $koneksi->query("SELECT * from tb_kegiatan");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td align="center">
							<img src="foto/kegiatan/<?php echo $data['foto']; ?>" width="70px" />
						</td>
						<td>
						<?php
							echo substr($data['judul'], 0, 20); 
							?>...
						</td>
						<td>
							<?php echo $data['kategori']; ?>
						</td>
						<td>	

							<?php
							echo substr($data['deskripsi'], 0, 20); 
							?>...
						</td>

						<td>
							<a href="?page=view-kegiatan&kode=<?php echo $data['id_kegiatan']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-kegiatan&kode=<?php echo $data['id_kegiatan']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kegiatan&kode=<?php echo $data['id_kegiatan']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->