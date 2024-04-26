<h2>Tambah Warna</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Warna</label>
		<input type="text" class="form-control" name="IdWarna">
	</div>
	<div class="form-group">
		<label>Nama Warna</label>
		<input type="text" class="form-control" name="NamaWarna">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO warna (Id_Warna, Nm_Warna) VALUES('$_POST[IdWarna]', '$_POST[NamaWarna]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=warna'>";
}
?>