<h2>Tambah Sistem Jasa</h2>

<form method ="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Sistem Jasa</label>
		<input type="text" class="form-control" name="IdSistemJasa">
	</div>
	<div class="form-group">
		<label>Nama Sistem Jasa</label>
		<input type="text" class="form-control" name="NamaSistemJasa">
	</div>
	<div class="form-group">
		<label>Id Jasa Kirim</label>
		<select class="form-control" name="IdJasaKirim" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jasakirim ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_JasaKirim'] ?>" > <?php echo $pecah['Id_JasaKirim'] ?>-<?php echo $pecah['Nm_JasaKirim'] ?></option>
		<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Id Jenis Jasa Kirim</label>
		<select class="form-control" name="IdJenisJasaKirim" required>
		<?php $ambil=$koneksi->query("SELECT*FROM jenisjasakirim ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecah['Id_JenisJasaKirim'] ?>" > <?php echo $pecah['Id_JenisJasaKirim'] ?>-<?php echo $pecah['Nm_JenisJasaKirim'] ?></option>
		<?php } ?>
		</select>
	</div>
	<button class="btn btn-primery" name="save">Simpan</button>
</form>

<?php
if (isset ( $_POST['save']))
{
	$koneksi->query("INSERT INTO sistemjasa(Id_SistemJasa,Nm_SistemJasa, Id_JasaKirim, Id_JenisJasakirim) VALUES('$_POST[IdSistemJasa]', 
	'$_POST[NamaSistemJasa]','$_POST[IdJasaKirim]','$_POST[IdJenisJasaKirim]')");
	echo "<div class='alert alert-info'> Data Berhasil Ditambahkan </div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=sistemjasa'>";
}
?>