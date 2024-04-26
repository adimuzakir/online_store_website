<?php

if(isset($_POST['cari']))
{
	$_SESSION['session_pencarian'] = $_POST["keyword"];
	$keyword=$_SESSION['session_pencarian'];
}
else
{
	$keyword=$_SESSION['session_pencarian'];
}

$query=mysqli_query($koneksi, "SELECT * FROM jenisjasakirim WHERE Nm_JenisJasaKirim LIKE '%$keyword%'")


?>
<h2>Data Jenis Jasa Kirim</h2>
		<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=carijenisjasakirim2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Jenis Jasa Kirim" autofocus autocomplete="off">
			</div>
		</div>
		<div class="col-md-2">
			<label></label>
			<button class="btn btn-primary" name="cari">Cari</button>
		</div>
		</form>
<table class="table table-bordered"background="bg.jpg">
	<thead>
		<tr>
			<th> No. </th>
			<th> Id Jenis Jasa Kirim </th>
			<th> Nama Jenis Jasa Kirim </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=mysqli_query($koneksi, "SELECT * FROM jenisjasakirim WHERE Nm_JenisJasaKirim LIKE '%$keyword%'")?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> <?php echo $pecah['Id_JenisJasaKirim']; ?></td>
			<td><?php echo $pecah['Nm_JenisJasaKirim']; ?></td>
			<td> 
				<a href="index2.php?halaman=hapusjenisjasakirim2&id=<?php echo $pecah['Id_JenisJasaKirim'];?> " class="btn-danger btn" >Hapus</a>
				<a href="index2.php?halaman=ubahjenisjasakirim2&id=<?php echo $pecah['Id_JenisJasaKirim'];?>" class="btn btn-warning"> Ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href=" index2.php?halaman=tambahjenisjasakirim2" class ="btn btn-primary">Tambah Jenis Jasa Kirim</a>