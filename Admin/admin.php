<h3> Data Admin </h3>
<table class="table table-bordered"background="bg.jpg">
	<thead>
		<tr>
			<th> No. </th>
			<th> Username </th>
			<th> Password </th>
			<th> Nama </th>
			<th> Level </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT*FROM admin");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> <?php echo $pecah['Username']; ?></td>
			<td> <?php echo $pecah ['Password']; ?></td>
			<td> <?php echo $pecah ['Nama']; ?></td>
			<td><?php echo $pecah['Level']; ?></td>
			<td> 
		<a href="index2.php?halaman=hapusadmin&id=<?php echo $pecah['Username'];?> " class="btn-danger btn" >Hapus</a>
		<a href="index2.php?halaman=ubahadmin&id=<?php echo $pecah['Username'];?>" class="btn btn-warning"> Ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href=" index2.php?halaman=tambahadmin" class ="btn btn-primary"> Tambah </a>