<h2> Ubah Jenis Jasa Kirim </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM jenisjasakirim WHERE Id_JenisJasaKirim='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Jenis Jasa Kirim </label>
		<input type="text" class="form-control" name="IdJenisJasaKirim" value="<?php echo $pecah['Id_JenisJasaKirim'];?>">
	</div>
	<div class="form-group">
		<label> Nama Jenis Jasa Kirim </label>
		<input type="text" class="form-control" name="NamaJenisJasaKirim" value="<?php echo $pecah['Nm_JenisJasaKirim'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE jenisjasakirim SET Id_JenisJasaKirim='$_POST[IdJenisJasaKirim]',
	Nm_JenisJasaKirim='$_POST[NamaJenisJasaKirim]' WHERE Id_JenisJasaKirim='$_GET[id]'");

echo "<script> alert(' Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=jenisjasakirim';</script>";
}

?>