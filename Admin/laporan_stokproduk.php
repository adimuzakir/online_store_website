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

$query=mysqli_query($koneksi, "SELECT * FROM produk WHERE Id_Produk LIKE '%$keyword%' OR Nm_Produk LIKE '%$keyword%' 
		OR Stok LIKE '%$keyword%' ")

?>
<div class="row">
    <div class="col-lg-12">
        <h2>Laporan Stok Produk</h2>   
</div>
    </div>              
<!-- /. ROW  -->
<hr />


 <form class="form-horizontal" role="search" method="post" action="index.php?halaman=laporan_stokproduk">
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


<form method="post" action="index.php?halaman=caristok">
	<div class="row">
		
		<div class="col-md-3">
			<div class="form-group">
				<select class="form-control" name="status">
					<option value=" " >Pilih stok</option>
					<option value="0" >Stok Habis</option>
			
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
			<th>No.</th>
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=mysqli_query($koneksi, "SELECT * FROM produk WHERE Id_Produk LIKE '%$keyword%' OR Nm_Produk LIKE '%$keyword%' 
		OR Stok LIKE '%$keyword%' ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> <?php echo $pecah['Id_Produk']; ?></td>			
			<td> <?php echo $pecah['Nm_Produk']; ?></td>
			<td> <?php echo $pecah['Stok']; ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

