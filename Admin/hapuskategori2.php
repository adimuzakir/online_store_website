<?php
$ambil=$koneksi->query("SELECT * FROM kategori WHERE Id_Kategori='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM kategori WHERE Id_Kategori='$_GET[id]' ");


echo "<script> alert(' Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=kategori2';</script>";
?>

