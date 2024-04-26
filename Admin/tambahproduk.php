<h2> Tambah Produk </h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label> Id Produk </label>
			<input type="text" class="form-control" name="IdProduk">
		</div>
		<div class="form-group">
			<label> Nama Produk </label>
			<input type="text" class="form-control" name="NamaProduk">
		</div>
		<div class="form-group">
			<label> Harga </label>
			<input type="text" class="form-control" name="Harga">
		</div>
		<div class="form-group">
			<label> Stok </label>
			<input type="text" class="form-control" name="Stok">
		</div>
		<div class="form-group">
			<label> Foto </label>
			<input type="file" class="form-control" name="Foto">
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
			<label> Id Warna</label>
			<select class="form-control" name="IdWarna" required>
				<?php $ambil=$koneksi->query("SELECT*FROM warna ");?>
				<?php while($pecah=$ambil->fetch_assoc()){?>
				<option value="<?php echo $pecah['Id_Warna'] ?>" > <?php echo $pecah['Id_Warna'] ?>-<?php echo $pecah['Nm_Warna'] ?></option>
				<?php } ?>
			</select>
		</div>
		<button class="btn btn-primary" name="savee"> Simpan </button>
	</form>
<?php
if (isset ( $_POST['savee']))
{
	$nama = $_FILES['Foto']['name'];
	$lokasi = $_FILES['Foto']['tmp_name'];
	move_uploaded_file($lokasi, "../Foto/".$nama);
	$koneksi->query("INSERT INTO produk (Id_Produk, Nm_Produk, Harga, Stok, Foto, Id_Motif, Id_Warna)
	VALUES('$_POST[IdProduk]','$_POST[NamaProduk]','$_POST[Harga]','$_POST[Stok]','$nama', '$_POST[IdMotif]','$_POST[IdWarna]')");
	
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";

}
?>