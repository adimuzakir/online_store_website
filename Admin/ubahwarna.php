<h2> Ubah Warna </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM warna WHERE Id_Warna='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Warna </label>
		<input type="text" class="form-control" name="IdWarna" value="<?php echo $pecah['Id_Warna'];?>">
	</div>
	<div class="form-group">
		<label> Nama Warna </label>
		<input type="text" class="form-control" name="NamaWarna" value="<?php echo $pecah['Nm_Warna'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE warna SET Id_Warna='$_POST[IdWarna]',
	Nm_Warna='$_POST[NamaWarna]' WHERE Id_Warna='$_GET[id]'");

echo "<script> alert(' Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=warna';</script>";
}

?>