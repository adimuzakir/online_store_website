<h2>Data Motif</h2>
	<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=carimotif2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Motif" autofocus autocomplete="off">
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
				<th>Id Motif</th>
				<th>Nama Motif</th>
				<th>Id Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM motif"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Motif']; ?></td>
				<td><?php echo $pecah['Nm_Motif']; ?></td>
				<td><?php echo $pecah['Id_Kategori']; ?></td>
				<td>
					<a href="index2.php?halaman=hapusmotif2&id=<?php echo $pecah['Id_Motif'];?>" class="btn-danger btn">Hapus</a>
					<a href="index2.php?halaman=ubahmotif2&id=<?php echo $pecah['Id_Motif'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index2.php?halaman=tambahmotif2" class ="btn btn-primary">Tambah Motif</a>