<h2> Data Faktur </h2>
	<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carifaktur">
		<div class="col-md-3">
			<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nomor Faktur" autofocus autocomplete="off">
			</div>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary" name="cari">Cari</button>
		</div>
	</form>
	<form method="post" action="index.php?halaman=caristatusfaktur">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<select class="form-control" name="status">
						<option value=" " >Pilih status</option>
						<option value="Belum Dibayar">Belum Dibayar</option>
						<option value="Sudah Kirim Pembayaran">Sudah Kirim Pembayaran</option>
						<option value="Barang Dikemas">Barang Dikemas</option>
						<option value="Barang Dikirim">Barang Dikirim</option>
						<option value="Selesai">Selesai</option>
						<option value="Complain">Complain</option>
					</select>
				</div>
			</div>
			<div class="col-md-2">
				<button class="btn btn-primary" name="lihat">Lihat</button>
			</div>
		</div>
	</form>
<table class="table table-bordered" background="bg.jpg">
	<thead>
		<tr>
			<th> No. </th>
			<th> Nomor Faktur </th>
			<th> Username </th>
			<th> Nama Status </th>
			<th> Jenis Pembayaran </th>
			<th> Id Daftar Kirim </th>
			<th> Tanggal Beli </th>
			<th> Total Bayar </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT*FROM faktur JOIN pembeli ON faktur.Username=pembeli.Username JOIN
									bayar ON faktur.Id_Bayar=bayar.Id_Bayar JOIN status ON faktur.Id_Status=status.Id_Status
									JOIN daftarkirim ON faktur.Id_DaftarKirim=daftarkirim.Id_DaftarKirim"); ?> 
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> <?php echo $pecah['No_Faktur']; ?></td>
			<td> <?php echo $pecah['Username']; ?></td>
			<td> <?php echo $pecah['Nm_Status']; ?> </td>
			<td> <?php echo $pecah['Nm_Bayar']; ?></td>
			<td> <?php echo $pecah['Id_DaftarKirim']; ?></td>
			<td><?php echo $pecah['Tgl_Beli']; ?></td>
			<td> Rp.<?php echo number_format($pecah['Total_Bayar']); ?></td>
			<td> 
				<a href="index.php?halaman=detail&id=<?php echo $pecah['No_Faktur'];?>" class="btn btn-info">Detail</a>
				<?php if($pecah['Nm_Status']=="Selesai" OR $pecah['Nm_Status']=="Complain") :?>
				<a href="index.php?halaman=penilaian&id=<?php echo $pecah['No_Faktur']?>" class="btn btn-warning">Lihat Penilaian</a>
				<?php endif?>
				<?php if($pecah['Nm_Status']!=="Belum Dibayar"):?>
				<a href="index.php?halaman=pembayaran&id=<?php echo $pecah['No_Faktur']?>" class="btn btn-success">Lihat Pembayaran</a>
				<?php endif?>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>