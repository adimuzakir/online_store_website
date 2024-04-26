<h2> Tambah Admin </h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Username </label>
		<input type="text" class="form-control" name="Username">
	</div>
	<div class="form-group">
		<label> Password </label>
		<input type="text" class="form-control" name="Password">
	</div>
	<div class="form-group">
		<label> Nama </label>
		<input type="text" class="form-control" name="Nama">
	</div>
	<div class="form-group">
		<label> Level </label>
		<input type="text" class="form-control" name="Level">
	</div>


	<button class="btn btn-primary" name="save"> Simpan </button>
</form>
<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO admin (Username, Password,Nama, Level) VALUES('$_POST[Username]', '$_POST[Password]','$_POST[Nama]', '$_POST[Level]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=admin'>";
}
?>
