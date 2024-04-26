<h2>Data Jenis</h2>
	<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=carijenis2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Jenis" autofocus autocomplete="off">
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
				<th>Id Jenis</th>
				<th>Nama Jenis</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jenis"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Jenis']; ?></td>
				<td><?php echo $pecah['Nm_Jenis']; ?></td>
				<td>
					<a href="index2.php?halaman=hapusjenis2&id=<?php echo $pecah['Id_Jenis'];?>" class="btn-danger btn">Hapus</a>
					<a href="index2.php?halaman=ubahjenis2&id=<?php echo $pecah['Id_Jenis'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index2.php?halaman=tambahjenis2" class ="btn btn-primary">Tambah Jenis</a>