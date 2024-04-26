<h2>Tambah Status</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Status</label>
		<input type="text" class="form-control" name="IdStatus">
	</div>
	<div class="form-group">
		<label>Nama Status</label>
		<input type="text" class="form-control" name="NamaStatus">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO status (Id_Status, Nm_Status) VALUES('$_POST[IdStatus]', '$_POST[NamaStatus]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=status2'>";
}
?>