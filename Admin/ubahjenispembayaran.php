<h2> Ubah Jenis Pembayaran </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM bayar WHERE Id_Bayar='$_GET[id]'");
$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label> Id Jenis Pembayaran </label>
		<input type="text" class="form-control" name="IdJenispembayaran" value="<?php echo $pecah['Id_Bayar'];?>">
	</div>
	<div class="form-group">
		<label> Nama Jenis Pembayaran </label>
		<input type="text" class="form-control" name="NamaJenispembayaran" value="<?php echo $pecah['Nm_Bayar'];?>">
	</div>
	<div class="form-group">
		<label> Nomor Akun Jenis Pembayaran </label>
		<input type="text" class="form-control" name="NomorAkunJenispembayaran" value="<?php echo $pecah['No_Akun'];?>">
	</div>
	<div class="form-group">
		<label> Nama Akun Jenis Pembayaran </label>
		<input type="text" class="form-control" name="NamaAkunJenispembayaran" value="<?php echo $pecah['Nm_Akun'];?>">
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>

<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE bayar SET Id_Bayar='$_POST[IdJenispembayaran]',
	Nm_Bayar='$_POST[NamaJenispembayaran]',No_Akun='$_POST[NomorAkunJenispembayaran]',Nm_Akun='$_POST[NamaAkunJenispembayaran]'  
	WHERE Id_Bayar='$_GET[id]'");

echo "<script> alert('Data Berhasil Diubah');</script>";
echo "<script>location='index.php?halaman=jenispembayaran';</script>";
}

?>