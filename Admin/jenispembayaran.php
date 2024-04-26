<h2>Data Jenis Pembayaran</h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carijenispembayaran">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Jenis Pembayaran" autofocus autocomplete="off">
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
				<th>Id Jenis Pembayaran</th>
				<th>Nama Jenis Pembayaran</th>
				<th>Nomor Akun Jenis Pembayaran</th>
				<th>Nama Akun Jenis Pembayaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php include "koneksi.php"?>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM bayar"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Bayar']; ?></td>
				<td><?php echo $pecah['Nm_Bayar']; ?></td>
				<td><?php echo $pecah['No_Akun']; ?></td>
				<td><?php echo $pecah['Nm_Akun']; ?></td>
				<td>
					<a href="index.php?halaman=hapusjenispembayaran&id=<?php echo $pecah['Id_Bayar'];?>" class="btn-danger btn">Hapus</a>
					<a href="index.php?halaman=ubahjenispembayaran&id=<?php echo $pecah['Id_Bayar'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?halaman=tambahjenispembayaran" class ="btn btn-primary">Tambah Jenis Pembayaran</a>