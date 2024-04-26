<h2>Data Produk</h2>
	<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=cariproduk2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Produk" autofocus autocomplete="off">
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
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Foto</th>
			<th>Id Motif</th>
			<th>Id Warna</th>
			<th>Aksi</th>
		</tr>
	</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Id_Produk']; ?></td>
				<td><?php echo $pecah['Nm_Produk']; ?></td>
				<td><?php echo $pecah['Harga']; ?></td>
				<td><?php echo $pecah['Stok']; ?></td>
				<td> 
					<img src="../Foto/<?php echo $pecah['Foto'];?>" width="100">
				</td>
				<td><?php echo $pecah['Id_Motif']; ?></td>
				<td><?php echo $pecah['Id_Warna']; ?></td>
				<td>
					<a href="index2.php?halaman=hapusproduk2&id=<?php echo $pecah['Id_Produk'];?>" class="btn-danger btn">Hapus</a>
					<a href="index2.php?halaman=ubahproduk2&id=<?php echo $pecah['Id_Produk'];?>" class="btn btn-warning">Ubah</a>
				</td>	
			</tr>
			<?php $nomor++ ?>
			<?php } ?>
		</tbody>
	</table>
	<a href="index2.php?halaman=tambahproduk2" class ="btn btn-primary">Tambah Produk</a>
	
