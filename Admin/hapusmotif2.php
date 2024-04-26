<?php
$ambil=$koneksi->query("SELECT * FROM motif WHERE Id_Motif='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

$koneksi->query("DELETE FROM motif WHERE Id_Motif='$_GET[id]' ");


echo "<script> alert('Data Berhasil Dihapus');</script>";
echo "<script>location='index2.php?halaman=motif2';</script>";
?>

