<h2> Ubah Pembeli</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM pembeli WHERE Username='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Username</label>
		<input type="text" class="form-control" name="Username" value="<?php echo $pecah['Username'];?>">
	</div>
	<div class="form-group">
		<label> Nama Pembeli</label>
		<input type="text" class="form-control" name="NamaPembeli" value="<?php echo $pecah['Nm_Pembeli'];?>">
	</div>
	<div class="form-group">
		<label> Password</label>
		<input type="text" class="form-control" name="Password" value="<?php echo $pecah['Password'];?>">
	</div>
	<div class="form-group">
		<label> Nomor HP</label>
		<input type="text" class="form-control" name="NoHP" value="<?php echo $pecah['No_HPPembeli'];?>">
	</div>
	<div class="form-group">
		<label> Alamat</label>
		<input type="text" class="form-control" name="Alamat" value="<?php echo $pecah['Almt_Pembeli'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE pembeli SET Username='$_POST[Username]',
	Nm_Pembeli='$_POST[NamaPembeli]',Password='$_POST[Password]',
	No_HPPembeli='$_POST[NoHP]',Almt_Pembeli='$_POST[Alamat]'WHERE Username='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=pembeli';</script>";
}

?>