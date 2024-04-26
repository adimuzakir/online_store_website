<h2> Ubah Tujuan </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM tujuan WHERE Id_Tujuan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Tujuan </label>
		<input type="text" class="form-control" name="IdTujuan" value="<?php echo $pecah['Id_Tujuan'];?>">
	</div>
	<div class="form-group">
		<label> Nama Tujuan </label>
		<input type="text" class="form-control" name="NamaTujuan" value="<?php echo $pecah['Nm_Tujuan'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE tujuan SET Id_Tujuan='$_POST[IdTujuan]',
	Nm_Tujuan='$_POST[NamaTujuan]' WHERE Id_Tujuan='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=tujuan';</script>";
}

?>