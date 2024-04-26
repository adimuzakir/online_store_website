<h2>Tambah Tujuan</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Tujuan</label>
		<input type="text" class="form-control" name="IdTujuan">
	</div>
	<div class="form-group">
		<label>Nama Tujuan</label>
		<input type="text" class="form-control" name="NamaTujuan">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO tujuan (Id_Tujuan, Nm_Tujuan) VALUES('$_POST[IdTujuan]', '$_POST[NamaTujuan]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=tujuan2'>";
}
?>