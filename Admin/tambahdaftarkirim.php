<h2>Tambah Daftar Kirim</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Daftar Kirim</label>
		<input type="text" class="form-control" name="IdDaftarKirim">
	</div>
	<div class="form-group">
		<label>Id Tujuan</label>
		<select class="form-control" name="IdTujuan" required>
		<?php $ambil=$koneksi->query("SELECT*FROM tujuan ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_Tujuan'] ?>" > <?php echo $pecah['Id_Tujuan'] ?>-<?php echo $pecah['Nm_Tujuan'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Id Sistem Jasa</label>
		<select class="form-control" name="IdSistemJasa" required>
		<?php $ambil=$koneksi->query("SELECT*FROM sistemjasa ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_SistemJasa'] ?>" > <?php echo $pecah['Id_SistemJasa'] ?>-<?php echo $pecah['Nm_SistemJasa'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Tarif</label>
		<input type="text" class="form-control" name="Tarif">
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO daftarkirim (Id_DaftarKirim, Id_Tujuan,Id_SistemJasa,Tarif) 
	VALUES('$_POST[IdDaftarKirim]', '$_POST[IdTujuan]','$_POST[IdSistemJasa]','$_POST[Tarif]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=daftarkirim'>";
}
?>