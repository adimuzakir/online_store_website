<h2>Data Daftar Kirim</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=caridaftarkirim">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Id Daftar Kirim" autofocus autocomplete="off">
			</div>
		</div>
		<div class="col-md-2">
			<label></label>
			<button class="btn btn-primary" name="cari">Cari</button>
		</div>
	</form>
	<table class="table table-bordered"background="bg.jpg">
		</thead>
			<tr>
				<th>No.</th>
				<th>Id Daftar Kirim</th>
				<th>Id Tujuan</th>
				<th>Id Sistem Jasa</th>
				<th>Tarif</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM daftarkirim"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_DaftarKirim']; ?></td>
				<td><?php echo $pecah['Id_Tujuan']; ?></td>
				<td><?php echo $pecah['Id_SistemJasa']; ?></td>
				<td><?php echo $pecah['Tarif']; ?></td>
				<td>
					<a href="index.php?halaman=hapusdaftarkirim&id=<?php echo $pecah['Id_DaftarKirim'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahdaftarkirim&id=<?php echo $pecah['Id_DaftarKirim'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahdaftarkirim" class ="btn btn-primary">Tambah Daftar Kirim</a>