<?php
$ambil=$koneksi->query("SELECT * FROM bayar WHERE Id_Bayar='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM bayar WHERE Id_Bayar='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=jenispembayaran';</script>";
?>

