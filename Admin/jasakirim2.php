<h2>Data Jasa Kirim</h2>
	<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=carijasakirim2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Jasa Kirim" autofocus autocomplete="off">
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
				<th>Id Jasa Kirim</th>
				<th>Nama Jasa Kirim</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php include "koneksi.php"?>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jasakirim"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_JasaKirim']; ?></td>
				<td><?php echo $pecah['Nm_JasaKirim']; ?></td>
				<td>
					<a href="index2.php?halaman=hapusjasakirim2&id=<?php echo $pecah['Id_JasaKirim'];?>" class="btn-danger btn">Hapus</a>
					<a href="index2.php?halaman=ubahjasakirim2&id=<?php echo $pecah['Id_JasaKirim'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index2.php?halaman=tambahjasakirim2" class ="btn btn-primary">Tambah Jasa Kirim</a>