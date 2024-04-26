<h2> Ubah Motif </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM motif WHERE Id_Motif='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Motif </label>
		<input type="text" class="form-control" name="IdMotif" value="<?php echo $pecah['Id_Motif'];?>">
	</div>
	<div class="form-group">
		<label> Nama Motif </label>
		<input type="text" class="form-control" name="NamaMotif" value="<?php echo $pecah['Nm_Motif'];?>">
	</div>
	<div class="form-group">
		<label> Id Kategori </label>
		<select class="form-control" name="IdKategori" required>
		<?php $ambil=$koneksi->query("SELECT*FROM kategori ");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_Kategori'] ?>" > <?php echo $pecahh['Id_Kategori'] ?>-<?php echo $pecahh['Nm_Kategori'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE motif SET Id_Motif='$_POST[IdMotif]',
	Nm_Motif='$_POST[NamaMotif]',Id_Kategori='$_POST[IdKategori]' WHERE Id_Motif='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=motif';</script>";
}

?>