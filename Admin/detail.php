<h2> Detail Pembelian </h2>
<?php 
$ambil= $koneksi->query("SELECT * FROM faktur JOIN pembeli 
						ON faktur.Username=pembeli.Username
						WHERE faktur.No_Faktur='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<?php 
$ambill= $koneksi->query("SELECT * FROM faktur JOIN daftarkirim 
                        ON faktur.Id_DaftarKirim=daftarkirim.Id_DaftarKirim JOIN tujuan 
						ON daftarkirim.Id_Tujuan=tujuan.Id_Tujuan JOIN sistemjasa
						ON daftarkirim.Id_SistemJasa=sistemjasa.Id_SistemJasa JOIN jasakirim
						ON sistemjasa.Id_JasaKirim=jasakirim.Id_JasaKirim JOIN jenisjasakirim
						ON sistemjasa.Id_JenisJasaKirim=jenisjasakirim.Id_JenisJasaKirim
                        WHERE faktur.No_Faktur='$_GET[id]'");
$detaill = $ambill->fetch_assoc();
?>
<?php 
$ambilll= $koneksi->query("SELECT * FROM faktur JOIN bayar
						ON faktur.Id_Bayar=bayar.Id_Bayar
						WHERE faktur.No_Faktur='$_GET[id]'");
$detailll = $ambilll->fetch_assoc();
?>
<?php 
$ambillll= $koneksi->query("SELECT * FROM faktur JOIN status
						ON faktur.Id_Status=status.Id_Status
						WHERE faktur.No_Faktur='$_GET[id]'");
$detaillll = $ambillll->fetch_assoc();
?>
<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		<strong>No. Faktur: <?php echo $detail['No_Faktur'];?></strong><br> 
		Tanggal: <?php echo $detail['Tgl_Beli']; ?> <br>
		Status: <?php echo $detaillll['Nm_Status']; ?> <br>
		Total: Rp. <?php echo number_format($detail['Total_Bayar']); ?><br>		
		Jenis Pembayaran: <?php echo $detailll['Nm_Bayar']; ?> <br>
	</div>
	<div class="col-md-4">
		<h3>Pembeli</h3>
		<strong><?php echo $detail['Nm_Pembeli'];?></strong><br> 
		<p>
			<?php echo $detail['No_HPPembeli'];?><br>
		</p>
	</div>
	<div class="col-md-4">
		<h3>Pengiriman</h3>
		<strong><?php echo $detaill['Nm_Tujuan']; ?></strong> <br>
		<p>
			Jasa Kirim: <?php echo $detaill['Nm_JasaKirim']; ?> <br>
			Jenis Jasa Kirim: <?php echo $detaill['Nm_JenisJasaKirim']; ?> <br>
			Tarif: Rp. <?php echo number_format ($detaill['Tarif']); ?><br>
			Alamat: <?php echo $detail['Almt_Pengiriman']; ?>
		</p>
	</div>
</div>
<table class="table table-bordered"background="bg.jpg">
	<thead>
		<tr>
			<th> No. </th>
			<th> Nama Produk </th>
			<th> Harga </th>
			<th> Jumlah Produk </th>
			<th> Sub Total </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $totalbelanja=0;?>
		<?php $ambil=$koneksi->query("SELECT * FROM transaksi JOIN produk ON transaksi.Id_Produk=produk.Id_Produk 
		WHERE transaksi.No_Faktur='$_GET[id]'");?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?> </td>
			<td><?php echo $pecah['Nm_Produk']; ?> </td>
			<td> Rp.<?php echo number_format ($pecah['Harga']); ?></td>
			<td><?php echo $pecah['Qty']; ?></td>
			<td> 
				Rp.<?php echo number_format($pecah['Harga']*$pecah['Qty']); ?> </td>
			</td>
		</tr>
		<?php $totalbelanja+=($pecah['Harga']*$pecah['Qty']);?>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
	<tfoot>
				<tr>
					<th colspan="4"> Total Belanja</th>
					<th>Rp.<?php echo number_format( $totalbelanja)?>
				</tr>
				<tr>
					<th colspan="4"> Biaya Pengiriman</th>
					<th>Rp.<?php echo number_format( $detaill["Tarif"]); ?> 
				</tr>
				<tr>
					<th colspan="4"> Total Bayar</th>
					<th>Rp. <?php echo number_format($detaill["Tarif"]+ $totalbelanja);?></th>
				</tr>
			</tfoot>
</table>