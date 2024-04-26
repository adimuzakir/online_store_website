<?php
$ambil=$koneksi->query("SELECT * FROM warna WHERE Id_Warna='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM warna WHERE Id_Warna='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=warna';</script>";
?>

