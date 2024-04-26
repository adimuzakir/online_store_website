<h2> Ubah Kategori </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM kategori WHERE Id_Kategori='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Kategori </label>
		<input type="text" class="form-control" name="IdKategori" value="<?php echo $pecah['Id_Kategori'];?>">
	</div>
	<div class="form-group">
		<label> Nama Warna </label>
		<input type="text" class="form-control" name="NamaKategori" value="<?php echo $pecah['Nm_Kategori'];?>">
	</div>
	<div class="form-group">
		<label> Id Jenis </label>
		<select class="form-control" name="IdJenis" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jenis ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_Jenis'] ?>" > <?php echo $pecahh['Id_Jenis'] ?>-<?php echo $pecahh['Nm_Jenis'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE kategori SET Id_Kategori='$_POST[IdKategori]',
	Nm_Kategori='$_POST[NamaKategori]',Id_Jenis='$_POST[IdJenis]' WHERE Id_Kategori='$_GET[id]'");

echo "<script> alert(' Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=kategori';</script>";
}

?>
