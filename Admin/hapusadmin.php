<?php
$ambil=$koneksi->query("SELECT * FROM admin WHERE Username='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM admin WHERE Username='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=admin';</script>";
?>