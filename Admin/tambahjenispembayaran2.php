<h2>Tambah Jenis Pembayaran</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Jenis Pembayaran</label>
		<input type="text" class="form-control" name="IdJenispembayaran">
	</div>
	<div class="form-group">
		<label>Nama Jenis Pembayaran</label>
		<input type="text" class="form-control" name="NamaJenispembayaran">
	</div>
	<div class="form-group">
		<label>Nomor Akun Jenis Pembayaran</label>
		<input type="text" class="form-control" name="NomorAkunJenispembayaran">
	</div>
	<div class="form-group">
		<label>Nama Akun Jenis Pembayaran</label>
		<input type="text" class="form-control" name="NamaAkunJenispembayaran">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO bayar (Id_Bayar, Nm_Bayar, No_Akun, Nm_Akun) 
	VALUES('$_POST[IdJenispembayaran]','$_POST[NamaJenispembayaran]','$_POST[NomorAkunJenispembayaran]','$_POST[NamaAkunJenispembayaran]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=jenispembayaran2'>";
}
?>