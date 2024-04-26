<h2>Data Sistem Jasa</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carisistemjasa">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Id Sistem Jasa" autofocus autocomplete="off">
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
				<th>Id Sistem Jasa</th>
				<th>Nama Sistem Jasa</th>
				<th>Id Jasa Kirim</th>
				<th>Id Jenis Jasa Kirim</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM sistemjasa"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_SistemJasa']; ?></td>
				<td><?php echo $pecah['Nm_SistemJasa']; ?></td>
				<td><?php echo $pecah['Id_JasaKirim']; ?></td>
				<td><?php echo $pecah['Id_JenisJasaKirim']; ?></td>
				<td>
					<a href="index.php?halaman=hapussistemjasa&id=<?php echo $pecah['Id_SistemJasa'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahsistemjasa&id=<?php echo $pecah['Id_SistemJasa'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahsistemjasa" class ="btn btn-primary">Tambah Sistem Jasa</a>