<?php
$ambil=$koneksi->query("SELECT * FROM sistemjasa WHERE Id_SistemJasa='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM sistemjasa WHERE Id_SistemJasa='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=sistemjasa2';</script>";
?>

