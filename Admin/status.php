<h2>Data Status</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=caristatus">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Status" autofocus autocomplete="off">
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
				<th>Id Status</th>
				<th>Nama Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php include "koneksi.php"?>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM status"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Status']; ?></td>
				<td><?php echo $pecah['Nm_Status']; ?></td>
				<td>
					<a href="index.php?halaman=hapusstatus&id=<?php echo $pecah['Id_Status'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahstatus&id=<?php echo $pecah['Id_Status'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahstatus" class ="btn btn-primary">Tambah Status</a>