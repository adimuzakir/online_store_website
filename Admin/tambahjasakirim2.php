<h2>Tambah Jasa Kirim</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Jasa Kirim</label>
		<input type="text" class="form-control" name="IdJasaKirim">
	</div>
	<div class="form-group">
		<label>Nama Jasa Kirim</label>
		<input type="text" class="form-control" name="NamaJasaKirim">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO jasakirim (Id_JasaKirim, Nm_JasaKirim) VALUES('$_POST[IdJasaKirim]', '$_POST[NamaJasaKirim]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=jasakirim2'>";
}
?>