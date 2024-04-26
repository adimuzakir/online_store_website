<h2>Data Pembayaran</h2>
<?php
$No_Faktur=$_GET['id'];
$ambil=$koneksi->query("SELECT * FROM faktur WHERE No_Faktur='$No_Faktur'");
$detail = $ambil->fetch_assoc();
?>
<div class="row">
	<div class="col-md-6"></div>
		<table class="table table-bodered"background="bg.jpg" >
			<tr>
				<td>Nama</td>
				<td>Nomor Faktur</td>
				<td>Jenis Pembayaran</td>
				<td>Jumlah</td>
				<td>Tanggal</td>
				<td>Bukti Pembayaran</td>
			</tr>			
			<tr>
				<?php 
				$ambil= $koneksi->query("SELECT * FROM faktur JOIN pembeli 
										ON faktur.Username=pembeli.Username
										WHERE faktur.No_Faktur='$_GET[id]'");
				$detail = $ambil->fetch_assoc();
				?>
				<td><?php echo $detail['Nm_Pembeli'];?></td>
				<td><?php echo $detail['No_Faktur'];?></td>
				<?php 
				$ambill= $koneksi->query("SELECT * FROM faktur JOIN bayar
										ON faktur.Id_Bayar=bayar.Id_Bayar
										WHERE faktur.No_Faktur='$_GET[id]'");
				$detaill = $ambill->fetch_assoc();
				?>
				<td><?php echo $detaill['Nm_Bayar'];?></td>
				<?php 
				$ambilll= $koneksi->query("SELECT * FROM faktur JOIN daftarkirim 
                        ON faktur.Id_DaftarKirim=daftarkirim.Id_DaftarKirim
                        WHERE faktur.No_Faktur='$_GET[id]'");
				$detailll = $ambilll->fetch_assoc();
				?>
				<td>Rp. <?php echo number_format($detail['Total_Bayar']); ?></td>
				<td><?php echo $detail['Tgl_Beli'];?></td>
				<td><img src="../Bukti_Pembayaran/<?php echo $detail['Bukti_Pembayaran'];?>" width="100" class="img-responsive"></td>
			</tr>
		</table>
</div>
<form method="post">
	<div class = "form-group">
		<label> No. Resi Pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label> Status Pembelian </label>
		<select class="form-control" name="status">
		<?php $ambil=$koneksi->query("SELECT*FROM status");?>
		<?php while($pecahh=$ambil->fetch_assoc()){?>
		<option value="<?php echo $pecahh['Id_Status'] ?>" > <?php echo $pecahh['Nm_Status'] ?></option>
		<?php } ?>
		</select>
	</div>
		<button class="btn btn-primary" name="proses">Proses</button>
</form>
<?php
if(isset($_POST["proses"]))
{
	$resi=$_POST["resi"];
	$status=$_POST["status"];
	$koneksi->query("UPDATE faktur SET Resi_Pengiriman='$resi',Id_Status='$status' WHERE No_Faktur='$No_Faktur'");
	
	echo "<script>alert('Data Faktur Diperbarui');</script>";
	echo "<script>location='index.php?halaman=faktur';</script>";
}
?>