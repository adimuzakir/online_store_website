<div class="row">
    <div class="col-lg-12">
        <h2>Laporan Stok Produk</h2>   
	</div>
</div>              
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
<form method="post" action="index.php?halaman=searchstok">
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
<?php 
$semuadata=array();
if(isset($_POST["lihat"]))
{
	
	$status=$_POST["status"];
	$ambil=$koneksi->query("SELECT*FROM produk WHERE Stok='$status' ");
	while($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}
}
?>
<table class="table table-bordered"background="bg.jpg">
	<thead>
	<thead>
		<tr>
			<th> No. </th>
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php foreach ($semuadata as $key =>$value):?>
		<tr>
			<td><?php echo $key+1;?></td>
			<td> <?php echo $value['Id_Produk']; ?></td>
			<td><?php echo $value['Nm_Produk']; ?></td>
			<td> <?php echo $value['Stok']; ?></td>
			
		</tr>
		<?php endforeach ?>
	</tbody>	
</table>	