<?php
$ambil=$koneksi->query("SELECT * FROM jenisjasakirim WHERE Id_JenisJasaKirim ='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM jenisjasakirim WHERE Id_JenisJasaKirim ='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index.php?halaman=jenisjasakirim';</script>";
?>

