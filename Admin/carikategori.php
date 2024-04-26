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

$query=mysqli_query($koneksi, "SELECT * FROM kategori JOIN jenis ON kategori.Id_Jenis=jenis.Id_Jenis WHERE Nm_Kategori LIKE '%$keyword%'")


?>
<h3>Data Kategori</h3>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carikategori">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Kategori" autofocus autocomplete="off">
		</div>
		</div>
		<div class="col-md-2">
			<label></label>
			<button class="btn btn-primary" name="cari">Cari</button>
		</div>
	</form>
    <table class="table table-bordered" background="bg.jpg">
	</thead>
		<tr>
			<th>No.</th>
			<th>Id Kategori</th>
			<th>Nama Kategori</th>
			<th>Id Jenis</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=mysqli_query($koneksi, "SELECT * FROM kategori JOIN jenis ON kategori.Id_Jenis=jenis.Id_Jenis WHERE Nm_Kategori LIKE '%$keyword%'")?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Kategori']; ?></td>
				<td><?php echo $pecah['Nm_Kategori']; ?></td>
				<td><?php echo $pecah['Id_Jenis']; ?></td>
				<td>
					<a href="index.php?halaman=hapuskategori&id=<?php echo $pecah['Id_Kategori'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahkategori&id=<?php echo $pecah['Id_Kategori'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
	</tbody>
	</table>
	<a href="index.php?halaman=tambahkategori" class ="btn btn-primary">Tambah Kategori</a>
	