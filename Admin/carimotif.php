<?php

if(isset($_POST['cari']))
{
	$_SESSION['session_pencarian'] = $_POST["keyword"];
	$keyword=$_SESSION['session_pencarian'];
}
else
{
	$keyword=$_SESSION['session_pencarian'];
}

$query=mysqli_query($koneksi, "SELECT * FROM motif JOIN kategori ON motif.Id_Kategori=kategori.Id_Kategori WHERE Nm_Motif LIKE '%$keyword%'")

?>
<h2>Data Jenis</h2>
		<form class="form-horizontal" role="search" method="post" action="index.php?halaman=carimotif">
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
	<thead>
		<tr>
			<th> No. </th>
			<th> Id Motif </th>
			<th> Nama Motif </th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=mysqli_query($koneksi, "SELECT * FROM motif JOIN kategori ON motif.Id_Kategori=kategori.Id_Kategori WHERE Nm_Motif LIKE '%$keyword%'")?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> <?php echo $pecah['Id_Motif']; ?></td>
			<td><?php echo $pecah['Nm_Motif']; ?></td>
			<td> 
				<a href="index.php?halaman=hapusmotif&id=<?php echo $pecah['Id_Motif'];?> " class="btn-danger btn" >Hapus</a>
				<a href="index.php?halaman=ubahmotif&id=<?php echo $pecah['Id_Motif'];?>" class="btn btn-warning"> Ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href=" index.php?halaman=tambahmotif" class ="btn btn-primary"> Tambah Motif</a>