<?php 
$semuadata=array();
$tgl_mulai = "-";
$tgl_selesai = "-";
if(isset($_POST["lihat"]))
{
	$tgl_mulai=$_POST["tglm"];
	$tgl_selesai=$_POST["tgls"];
	$status=$_POST["status"];
	$ambil=$koneksi->query("SELECT*FROM faktur JOIN pembeli ON faktur.Username=pembeli.Username 
							Join status on faktur.Id_Status=status.Id_Status
							WHERE Nm_Status='$status' AND tgl_beli BETWEEN '$tgl_mulai' AND '$tgl_selesai' ");
	while($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}
}
?>
<h3> Laporan Transaksi dari <?php echo $tgl_mulai?> hingga <?php echo $tgl_selesai?> </h3>
<hr>
<form method="post">
	<div class="row">
		<div class="col-md-3">
		<div class="form-group">
				<label> Dari Tanggal </label>
				<input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai?>">
			</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
				<label> Sampai Tanggal </label>
				<input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai?>">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Status</label>
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
			<label></label><br>
			<button class="btn btn-primary" name="lihat">Lihat</button>
		</div>
	</div>
</form>
<table class="table table-bordered" background="bg.jpg">
	<thead>
		<tr>
			<th>No</th>
			<th>Pembeli</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Status</th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $total=0?>
		<?php foreach ($semuadata as $key =>$value):?>
		<?php $total+=$value['Total_Bayar']?>
		<tr>
			<td><?php echo $key+1;?></td>
			<td><?php echo $value["Nm_Pembeli"]?></td>
			<td><?php echo date("d F Y",strtotime($value["Tgl_Beli"]))?></td>
			<td><?php echo number_format($value["Total_Bayar"])?></td>
			<td><?php echo $value["Nm_Status"]?></td>
			<td><?php if($value['Nm_Status']!=="Belum Dibayar"):?>
				<a href="index.php?halaman=pembayaran&id=<?php echo $value['No_Faktur']?>
				" class="btn btn-success"> Lihat Pembayaran</a>
				<?php endif?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="3"> Total </th>
			<th> Rp.<?php echo number_format($total)?></th>
		</tr>
	</tfoot>
</table>