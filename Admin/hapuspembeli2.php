<?php
$ambil=$koneksi->query("SELECT * FROM pembeli WHERE Username='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM pembeli WHERE Username='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=pembeli2';</script>";
?>

