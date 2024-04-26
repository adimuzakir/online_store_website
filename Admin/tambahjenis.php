<h2>Tambah Jenis</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Jenis</label>
		<input type="text" class="form-control" name="IdJenis">
	</div>
	<div class="form-group">
		<label>Nama Jenis</label>
		<input type="text" class="form-control" name="NamaJenis">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO jenis (Id_Jenis, Nm_Jenis) VALUES('$_POST[IdJenis]', '$_POST[NamaJenis]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jenis'>";
}
?>