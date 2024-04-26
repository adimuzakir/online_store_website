<h2>Data Tujuan</h2>
	<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=caritujuan2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Tujuan" autofocus autocomplete="off">
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
				<th>Id Tujuan</th>
				<th>Nama Tujuan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM tujuan"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Tujuan']; ?></td>
				<td><?php echo $pecah['Nm_Tujuan']; ?></td>
				<td>
					<a href="index2.php?halaman=hapustujuan2&id=<?php echo $pecah['Id_Tujuan'];?>" class="btn-danger btn">Hapus</a>
					<a href="index2.php?halaman=ubahtujuan2&id=<?php echo $pecah['Id_Tujuan'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index2.php?halaman=tambahtujuan2" class ="btn btn-primary">Tambah Tujuan</a>