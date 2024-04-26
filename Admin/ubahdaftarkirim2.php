<h2> Ubah Daftar Kirim</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM daftarkirim WHERE Id_DaftarKirim='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Daftar Kirim </label>
		<input type="text" class="form-control" name="IdDaftarKirim" value="<?php echo $pecah['Id_DaftarKirim'];?>">
	</div>
	<div class="form-group">
		<label> Id Tujuan </label>
		<select class="form-control" name="IdTujuan" required>
		<?php $ambil=$koneksi->query("SELECT*FROM tujuan ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_Tujuan'] ?>" > <?php echo $pecahh['Id_Tujuan'] ?>-<?php echo $pecahh['Nm_Tujuan'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label> Id Sistem Jasa </label>
		<select class="form-control" name="IdSistemJasa" required>
		<?php $ambil=$koneksi->query("SELECT*FROM sistemjasa ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_SistemJasa'] ?>" > <?php echo $pecahh['Id_SistemJasa'] ?>-<?php echo $pecahh['Nm_SistemJasa'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label> Tarif </label>
		<input type="text" class="form-control" name="Tarif" value="<?php echo $pecah['Tarif'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE daftarkirim SET Id_DaftarKirim='$_POST[IdDaftarKirim]',
	Id_Tujuan='$_POST[IdTujuan]',Id_SistemJasa='$_POST[IdSistemJasa]'
	,Tarif='$_POST[Tarif]' WHERE Id_DaftarKirim='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index2.php?halaman=daftarkirim2';</script>";
}

?>