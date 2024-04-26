<h2>Data Jenis Jasa Kirim</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carijenisjasakirim">
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
	<table class="table table-bordered" background="bg.jpg">
		</thead>
			<tr>
				<th>No.</th>
				<th>Id Jenis Jasa Kirim</th>
				<th>Nama Jenis Jasa Kirim</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php include "koneksi.php"?>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jenisjasakirim"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_JenisJasaKirim']; ?></td>
				<td><?php echo $pecah['Nm_JenisJasaKirim']; ?></td>
				<td>
					<a href="index.php?halaman=hapusjenisjasakirim&id=<?php echo $pecah['Id_JenisJasaKirim'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahjenisjasakirim&id=<?php echo $pecah['Id_JenisJasaKirim'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahjenisjasakirim" class ="btn btn-primary">Tambah Jenis Jasa Kirim</a>