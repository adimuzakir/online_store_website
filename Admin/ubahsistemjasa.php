<h2> Ubah Sistem Jasa </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM sistemjasa WHERE Id_SistemJasa='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Sistem Jasa </label>
		<input type="text" class="form-control" name="IdSistemJasa" value="<?php echo $pecah['Id_SistemJasa'];?>">
	</div>
	<div class="form-group">
		<label> Nama Sistem Jasa </label>
		<input type="text" class="form-control" name="NamaSistemJasa" value="<?php echo $pecah['Nm_SistemJasa'];?>">
	</div>
	<div class="form-group">
		<label> Id Jasa Kirim </label>
		<select class="form-control" name="IdJasaKirim" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jasakirim ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_JasaKirim'] ?>" > <?php echo $pecahh['Id_JasaKirim'] ?>-<?php echo $pecahh['Nm_JasaKirim'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label> Id Jenis Jasa Kirim </label>
		<select class="form-control" name="IdJenisJasaKirim" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jenisjasakirim ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_JenisJasaKirim'] ?>" > <?php echo $pecahh['Id_JenisJasaKirim'] ?>-<?php echo $pecahh['Nm_JenisJasaKirim'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE sistemjasa SET Id_SistemJasa='$_POST[IdSistemJasa]',Nm_SistemJasa='$_POST[NamaSistemJasa]',
	Id_JasaKirim='$_POST[IdJasaKirim]',Id_JenisJasaKirim='$_POST[IdJenisJasaKirim]' WHERE Id_SistemJasa='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=sistemjasa';</script>";
}

?>