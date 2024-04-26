<?php
$ambil=$koneksi->query("SELECT * FROM status WHERE Id_Status='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM status WHERE Id_Status='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=status';</script>";
?>

