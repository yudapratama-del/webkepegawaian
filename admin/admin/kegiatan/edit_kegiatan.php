<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kegiatan WHERE id_kegiatan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">ID</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?php echo $data_cek['id_kegiatan']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Kegiatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_cek['judul']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori</label>
				<div class="col-sm-4">
					<select name="kategori" id="kategori" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['kategori'] == "Keagamaan") echo "<option value='Keagamaan' selected>Keagamaan</option>";
                else echo "<option value='Keagamaan'>Keagamaan</option>";

                if ($data_cek['kategori'] == "Pemerintahan") echo "<option value='Pemerintahan' selected>Pemerintahan</option>";
                else echo "<option value='Pemerintahan'>Pemerintahan</option>";

				if ($data_cek['kategori'] == "Pendidikan") echo "<option value='Pendidikan' selected>Pendidikan</option>";
                else echo "<option value='Pendidikan'>Pendidikan</option>";

                if ($data_cek['kategori'] == "Sosial") echo "<option value='Sosial' selected>Sosial</option>";
                else echo "<option value='Sosial'>Sosial</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $data_cek['deskripsi']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Kegiatan</label>
				<div class="col-sm-6">
					<img src="foto/kegiatan/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/kegiatan/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/kegiatan/$foto")){
            unlink("foto/kegiatan/$foto");}

        $sql_ubah = "UPDATE tb_kegiatan SET
			judul='".$_POST['judul']."',
			kategori='".$_POST['kategori']."',
			deskripsi='".$_POST['deskripsi']."',
			foto='".$nama_file."'		
            WHERE id_kegiatan='".$_POST['id_kegiatan']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE tb_kegiatan SET
		judul='".$_POST['judul']."',
		kategori='".$_POST['kategori']."',
		deskripsi='".$_POST['deskripsi']."'	
		WHERE id_kegiatan='".$_POST['id_kegiatan']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-kegiatan';
            }
        })</script>";
        }else{
			echo "<script>
			Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {
				if (result.value) {
					window.location = 'index.php?page=data-pegawai';
				}
			})</script>";	
    }
}

