<h2> Penilaian Produk  </h2>
<?php
$No_Faktur=$_GET['id'];
//mengambil data pembayaran berdasarkan No_Faktur
$ambil=$koneksi->query("SELECT * FROM faktur JOIN pembeli ON faktur.Username=pembeli.Username
						WHERE No_Faktur='$No_Faktur'");
$detail = $ambil->fetch_assoc();
?>
<div class="row">
	<div class="col-md-6"></div>
		<table class="table table-bodered"background="bg.jpg">
			<tr>
				<td>Nama</td>
				<td>Username</td>
				<td>No.Faktur</td>
				<td>Rating</td>
				<td>Ulasan</td>
			</tr>			
			<tr>
				<td><?php echo $detail['Nm_Pembeli'];?></td>
				<td><?php echo $detail['Username'];?></td>
				<td><?php echo $detail['No_Faktur'];?></td>
				<td><?php echo $detail['Bintang'];?></td>
				<td><?php echo $detail['Penilaian_Produk'];?></td>
			</tr>
		</table>
</div>
