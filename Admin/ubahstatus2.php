<h2> Ubah Status </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM status WHERE Id_Status='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Status </label>
		<input type="text" class="form-control" name="IdStatus" value="<?php echo $pecah['Id_Status'];?>">
	</div>
	<div class="form-group">
		<label> Nama Status </label>
		<input type="text" class="form-control" name="NamaStatus" value="<?php echo $pecah['Nm_Status'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE status SET Id_Status='$_POST[IdStatus]',
	Nm_Status='$_POST[NamaStatus]' WHERE Id_Status='$_GET[id]'");

echo "<script> alert(' Data Berhasil Diubah');</script>";
echo "<script>location='index2.php?halaman=status2';</script>";
}

?>