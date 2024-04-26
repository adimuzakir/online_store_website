<h2> Ubah Produk </h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Id Produk </label>
			<?php $ambil=$koneksi->query("SELECT*FROM produk WHERE Id_Produk='$_GET[id]'");?>
			<?php $pecah=$ambil->fetch_assoc()?>
			<input type="text" class="form-control" name="IdProduk" value="<?php echo $pecah['Id_Produk'];?>">
		</div>
		<div class="form-group">
			<label>Nama Produk </label>
			<?php $ambil=$koneksi->query("SELECT*FROM produk WHERE Id_Produk='$_GET[id]'");?>
			<?php $pecah=$ambil->fetch_assoc()?>
			<input type="text" class="form-control" name="NamaProduk" value="<?php echo $pecah['Nm_Produk'];?>">
		</div>
		<div class="form-group">
			<label> Harga </label>
			<?php $ambil=$koneksi->query("SELECT*FROM produk WHERE Id_Produk='$_GET[id]' ");?>
			<?php $pecah=$ambil->fetch_assoc()?>
			<input type="text" class="form-control" name="Harga"value="<?php echo $pecah['Harga'];?>">
		</div>
		<div class="form-group">
			<label> Stok </label>
			<?php $ambil=$koneksi->query("SELECT*FROM produk WHERE Id_Produk='$_GET[id]'");?>
			<?php $pecah=$ambil->fetch_assoc()?>
			<input autocomplate="off" class="form-control" name="Stok" value="<?php echo $pecah['Stok'];?>">
		</div>
		<div class="form-group">
			<?php $ambil=$koneksi->query("SELECT*FROM produk WHERE Id_Produk='$_GET[id]' ");?>
			<?php $pecah=$ambil->fetch_assoc()?>
			<img src="../Foto/<?php echo $pecah['Foto']?>" width="100">
		</div>
		<div class="form-group">
			<label> Ganti Foto </label>
			<input type="file" name="Foto" class="form-control">
		</div>
		<div class="form-group">
			<label> Id Motif </label>
			<select class="form-control" name="IdMotif" required>
			<?php $ambil=$koneksi->query("SELECT*FROM motif ");?>
			<?php while($pecah=$ambil->fetch_assoc()){?>
			<option value="<?php echo $pecah['Id_Motif'] ?>" > <?php echo $pecah['Id_Motif'] ?>-<?php echo $pecah['Nm_Motif'] ?></option>
			<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label> Id Warna </label>
			<select class="form-control" name="IdWarna" required>
			<?php $ambill=$koneksi->query("SELECT*FROM warna ");?>
			<?php while($pecah=$ambill->fetch_assoc()){?>
			<option value="<?php echo $pecah['Id_Warna'] ?>" > <?php echo $pecah['Id_Warna'] ?>-<?php echo $pecah['Nm_Warna'] ?></option>
			<?php } ?>
			</select>
		</div>
	<button class="btn btn-primary" name="ubah"> Ubah </button>
</form>
<?php
if (isset ( $_POST['ubah']))
{
	$namafoto=$_FILES['Foto']['name'];
	$lokasifoto=$_FILES['Foto']['tmp_name'];
	//jika foto dirubah
	if(!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../Foto/$namafoto");
		
		$koneksi->query("UPDATE produk SET Id_Produk='$_POST[IdProduk]', Nm_Produk='$_POST[NamaProduk]'
		,Harga='$_POST[Harga]',Stok='$_POST[Stok]',Foto='$namafoto',
		Id_Motif='$_POST[IdMotif]',Id_Warna='$_POST[IdWarna]' WHERE Id_Produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET Id_Produk='$_POST[IdProduk]', Nm_Produk='$_POST[NamaProduk]'
		,Harga='$_POST[Harga]',Stok='$_POST[Stok]',Id_Motif='$_POST[IdMotif]',
		Id_Warna='$_POST[IdWarna]' WHERE Id_Produk='$_GET[id]'");
	}
	echo "<div class='alert alert-info'> Data Berhasil Diubah </div>";
	echo "<meta http-equiv='refresh' content='1;url=index2.php?halaman=produk2'>";
}
?>