<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE Id_Produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM produk WHERE Id_Produk='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
?>