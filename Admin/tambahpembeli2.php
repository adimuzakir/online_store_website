<h2>Tambah Pembeli</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="Username">
	</div>
	<div class="form-group">
		<label>Nama Pembeli</label>
		<input type="text" class="form-control" name="NamaPembeli">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="Password">
	</div>
	<div class="form-group">
		<label>Nomor Hp</label>
		<input type="text" class="form-control" name="NoHP">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="Alamat">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO pembeli (Username, Nm_Pembeli,Password,No_HPPembeli,Almt_Pembeli)
	VALUES('$_POST[Username]', '$_POST[NamaPembeli]','$_POST[Password]','$_POST[NoHP]','$_POST[Alamat]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=pembeli2'>";
}
?>