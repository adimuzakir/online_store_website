<h2>Tambah Jenis Jasa Kirim</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Jenis Jasa Kirim</label>
		<input type="text" class="form-control" name="IdJenisJasaKirim">
	</div>
	<div class="form-group">
		<label>Nama Jenis Jasa Kirim</label>
		<input type="text" class="form-control" name="NamaJenisJasaKirim">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO jenisjasakirim (Id_JenisJasaKirim, Nm_JenisJasaKirim) VALUES('$_POST[IdJenisJasaKirim]', '$_POST[NamaJenisJasaKirim]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=jenisjasakirim2'>";
}
?>