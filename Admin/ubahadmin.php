<h2> Ubah Admin </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM admin WHERE Username='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Username </label>
		<input type="text" class="form-control" name="Username" value="<?php echo $pecah['Username'];?>">
	</div>
	<div class="form-group">
		<label> Passwword </label>
		<input type="text" class="form-control" name="Password" value="<?php echo $pecah['Password'];?>">
	</div>
	<div class="form-group">
		<label> Nama </label>
		<input type="text" class="form-control" name="Nama" value="<?php echo $pecah['Nama'];?>">
	</div>
	<div class="form-group">
		<label> Level </label>
		<input type="text" class="form-control" name="Level" value="<?php echo $pecah['Level'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE admin SET Username='$_POST[Username]', Password='$_POST[Password]',Nama='$_POST[Nama]',
	Level='$_POST[Level]' WHERE Username='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index2.php?halaman=admin';</script>";
}

?>