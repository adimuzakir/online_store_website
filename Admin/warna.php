<h2>Data Warna</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=cariwarna">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Warna" autofocus autocomplete="off">
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
				<th>Id Warna</th>
				<th>Nama Warna</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php include "koneksi.php"?>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM warna"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Warna']; ?></td>
				<td><?php echo $pecah['Nm_Warna']; ?></td>
				<td>
					<a href="index.php?halaman=hapuswarna&id=<?php echo $pecah['Id_Warna'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahwarna&id=<?php echo $pecah['Id_Warna'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahwarna" class ="btn btn-primary">Tambah Warna</a>