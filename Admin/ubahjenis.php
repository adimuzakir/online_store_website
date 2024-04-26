<h2> Ubah Jenis </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM jenis WHERE Id_Jenis='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Jenis </label>
		<input type="text" class="form-control" name="IdJenis" value="<?php echo $pecah['Id_Jenis'];?>">
	</div>
	<div class="form-group">
		<label> Nama Jenis </label>
		<input type="text" class="form-control" name="NamaJenis" value="<?php echo $pecah['Nm_Jenis'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE jenis SET Id_Jenis='$_POST[IdJenis]',
	Nm_Jenis='$_POST[NamaJenis]' WHERE Id_Jenis='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=jenis';</script>";
}

?>