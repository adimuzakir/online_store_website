<?php
$ambil=$koneksi->query("SELECT * FROM daftarkirim WHERE Id_DaftarKirim='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM daftarkirim WHERE Id_DaftarKirim='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=daftarkirim';</script>";
?>

