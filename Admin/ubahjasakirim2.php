<h2> Ubah Jasa Kirim </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM jasakirim WHERE Id_JasaKirim='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Jasa Kirim </label>
		<input type="text" class="form-control" name="IdJasaKirim" value="<?php echo $pecah['Id_JasaKirim'];?>">
	</div>
	<div class="form-group">
		<label> Nama Jasa Kirim </label>
		<input type="text" class="form-control" name="NamaJasaKirim" value="<?php echo $pecah['Nm_JasaKirim'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE jasakirim SET Id_JasaKirim='$_POST[IdJasaKirim]',
	Nm_JasaKirim='$_POST[NamaJasaKirim]' WHERE Id_JasaKirim='$_GET[id]'");

echo "<script> alert(' Data Berhasil Diubah');</script>";
echo "<script>location='index2.php?halaman=jasakirim2';</script>";
}

?>