<h2>Tambah Motif</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Motif</label>
		<input type="text" class="form-control" name="IdMotif">
	</div>
	<div class="form-group">
		<label>Nama Motif</label>
		<input type="text" class="form-control" name="NamaMotif">
	</div>
	<div class="form-group">
		<label>Id Kategori</label>
		<select class="form-control" name="IdKategori" required>
		<?php $ambil=$koneksi->query("SELECT*FROM kategori ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_Kategori'] ?>" > <?php echo $pecah['Id_Kategori'] ?>-<?php echo $pecah['Nm_Kategori'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO motif (Id_Motif, Nm_Motif, Id_Kategori) VALUES('$_POST[IdMotif]', '$_POST[NamaMotif]','$_POST[IdKategori]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=motif2'>";
}
?>