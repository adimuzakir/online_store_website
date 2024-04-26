<?php
$ambil=$koneksi->query("SELECT * FROM jasakirim WHERE Id_JasaKirim='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM jasakirim WHERE Id_JasaKirim='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=jasakirim2';</script>";
?>

