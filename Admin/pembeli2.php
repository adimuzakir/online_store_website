<h2> Data Pembeli </h2>


		<form class="form-horizontal" role="search" method="post" action="index2.php?halaman=caripembeli2">
		<div class="col-md-3">
		<div class="form-group">
				<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Pembeli" autofocus autocomplete="off">
			</div>
		</div>
		<div class="col-md-2">
			<label></label>
			<button class="btn btn-primary" name="cari">Cari</button>
		</div>
		</form>


<table class="table table-bordered"background="bg.jpg">
	<thead>
		<tr>
			<th> No. </th>
			<th> Username </th>
			<th> Nama Pembeli </th>
			<th> Password </th>
			<th> Nomor HP </th>
			<th> Alamat </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT*FROM pembeli ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['Username']; ?></td>
			<td> <?php echo $pecah['Nm_Pembeli']; ?></td>
			<td><?php echo $pecah['Password']; ?></td>
			<td><?php echo $pecah['No_HPPembeli']; ?></td>
			<td><?php echo $pecah['Almt_Pembeli']; ?></td>
			<td> 
				<a href="index2.php?halaman=hapuspembeli2&id=<?php echo $pecah['Username'];?> " class="btn-danger btn" >Hapus</a>
				<a href="index2.php?halaman=ubahpembeli2&id=<?php echo $pecah['Username'];?>" class="btn btn-warning"> Ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href=" index2.php?halaman=tambahpembeli2" class ="btn btn-primary"> Tambah Pembeli</a>