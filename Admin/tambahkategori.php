<h2>Tambah Kategori</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Kategori</label>
		<input type="text" class="form-control" name="IdKategori">
	</div>
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" class="form-control" name="NamaKategori">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
		<select class="form-control" name="IdJenis" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jenis ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_Jenis'] ?>" > <?php echo $pecah['Id_Jenis'] ?>-<?php echo $pecah['Nm_Jenis'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO kategori (Id_Kategori, Nm_Kategori,Id_Jenis) VALUES('$_POST[IdKategori]','$_POST[NamaKategori]','$_POST[IdJenis]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";
}
?>
