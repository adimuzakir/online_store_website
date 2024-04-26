<?php
session_start ();
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="adi";

$koneksi=mysqli_connect ($db_host,$db_user,$db_pass,$db_name);
?>
<?php
if(!isset($_SESSION['admin']))
{
	echo"<script>location='login.php';</script>";
	header('location:login.php');
	exit ();
}
?>	
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Burai SHOP | Super Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Super Admin</b></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="assets/dist/img/Foto aku.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Adi Muzakir</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/Motif Cantik Manis.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><font face="Brush Script MT" size="5"><b>Burai SHOP </font></p></b>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="index2.php"><img src ="assets/dist/img/home.png"><b><font face="algeria" size="2,5"><span> Home</span></a></li></font></b>
		<li><a href="index2.php?halaman=laporan_penjualan2"><img src ="assets/dist/img/pencil.png"><b><font face="algeria" size="2,5"><span> Laporan Transaksi</span></font></a></b></li>
		<li><a href="index2.php?halaman=laporan_stokproduk2"><img src ="assets/dist/img/2.png"><b><font face="algeria" size="2,5"><span> Laporan Stok Produk</span></a></li></font></b>
		<li><a href="index2.php?halaman=laporan_produkterlaris2"><img src ="assets/dist/img/post-it.png"><b><font face="algeria" size="2,5"><span> Laporan Penjualan</span></a></li></font></b>
		<li><a href="index2.php?halaman=pencarianrating2"><img src ="assets/dist/img/star.png"><b><font face="algeria" size="2,5"><span> Pencarian Rating</span></a></li></font></b>
		<li><a href="index2.php?halaman=warna2"><img src ="assets/dist/img/rattle.png"><b><font face="algeria" size="2,5"><span> Warna</span></a></li></font></b>
		<li><a href="index2.php?halaman=jenis2"><img src ="assets/dist/img/chromatography.png"><b><font face="algeria" size="2,5"><span> Jenis</span></a></li></font></b>
		<li><a href="index2.php?halaman=kategori2"><img src ="assets/dist/img/stationery.png"><b><font face="algeria" size="2,5"><span> Kategori</span></a></li></font></b>
		<li><a href="index2.php?halaman=motif2"><img src ="assets/dist/img/coronavirus.png"><b><font face="algeria" size="2,5"><span> Motif</span></a></li></font></b>
		<li><a href="index2.php?halaman=jenispembayaran2"><img src ="assets/dist/img/membership.png"><b><font face="algeria" size="2,5"><span> Jenis Pembayaran</span></a></li></font></b>
		<li><a href="index2.php?halaman=status2"><img src ="assets/dist/img/report.png"><b><font face="algeria" size="2,5"><span> Status</span></a></li></font></b>
		<li><a href="index2.php?halaman=jasakirim2"><img src ="assets/dist/img/monday.png"><b><font face="algeria" size="2,5"><span> Jasa Kirim</span></a></li></font></b>
		<li><a href="index2.php?halaman=jenisjasakirim2"><img src ="assets/dist/img/paper-clip.png"><b><font face="algeria" size="2,5"><span> Jenis Jasa Kirim</span></a></li></font></b>
		<li><a href="index2.php?halaman=tujuan2"><img src ="assets/dist/img/delivery-truck.png"><b><font face="algeria" size="2,5"><span> Tujuan</span></a></li></font></b>
		<li><a href="index2.php?halaman=sistemjasa2"><img src ="assets/dist/img/extensions-folder.png"><b><font face="algeria" size="2,5"><span> Sistem Jasa</span></a></li></font></b>
		<li><a href="index2.php?halaman=daftarkirim2"><img src ="assets/dist/img/dash.png"><b><font face="algeria" size="2,5"><span> Daftar Kirim</span></a></li></font></b>
		<li><a href="index2.php?halaman=pembeli2"><img src ="assets/dist/img/portrait.png"><b><font face="algeria" size="2,5"><span> Pembeli</span></a></li></font></b>
		<li><a href="index2.php?halaman=produk2"><img src ="assets/dist/img/notebook.png"><b><font face="algeria" size="2,5"><span> Produk</span></a></li></font></b>
		<li><a href="index2.php?halaman=faktur2"><img src ="assets/dist/img/open-book.png"><b><font face="algeria" size="2,5"><span>  Faktur</span></a></li></font></b>
		<li><a href="index2.php?halaman=logout2"><img src ="assets/dist/img/account.png"><b><font face="algeria" size="2,5"><span> Logout</span></a></li></font></b>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
		<?php
				if (isset($_GET['halaman']))
				{
					if ($_GET['halaman']=="warna2")
					{
						include 'warna2.php';
					}
					else if ($_GET['halaman']=="jenis2")
					{
						include 'jenis2.php';
					}
					else if ($_GET['halaman']=="kategori2")
					{
						include 'kategori2.php';
					}
					else if ($_GET['halaman']=="motif2")
					{
						include 'motif2.php';
					}
					else if ($_GET['halaman']=="jenispembayaran2")
					{
						include 'jenispembayaran2.php';
					}
					else if ($_GET['halaman']=="status2")
					{
						include 'status2.php';
					}
					else if ($_GET['halaman']=="jasakirim2")
					{
						include 'jasakirim2.php';
					}
					else if ($_GET['halaman']=="jenisjasakirim2")
					{
						include 'jenisjasakirim2.php';
					}
					else if ($_GET['halaman']=="tujuan2")
					{
						include 'tujuan2.php';
					}
					else if ($_GET['halaman']=="sistemjasa2")
					{
						include 'sistemjasa2.php';
					}
					else if ($_GET['halaman']=="daftarkirim2")
					{
						include 'daftarkirim2.php';
					}
					else if ($_GET['halaman']=="pembeli2")
					{
						include 'pembeli2.php';
					}
					else if ($_GET['halaman']=="produk2")
					{ 
						include 'produk2.php';
					}
					else if ($_GET['halaman']=="faktur2")
					{
						include 'faktur2.php';
					}
					else if ($_GET['halaman']=="tambahwarna2")
					{
						include 'tambahwarna2.php';
					}
					else if ($_GET['halaman']=="hapuswarna2")
					{
						include 'hapuswarna2.php';
					}
					else if ($_GET['halaman']=="ubahwarna2")
					{
						include 'ubahwarna2.php';
					}
					else if ($_GET['halaman']=="cariwarna2")
					{
						include 'cariwarna2.php';
					}
					else if ($_GET['halaman']=="tambahjenis2")
					{
						include 'tambahjenis2.php';
					}
					else if ($_GET['halaman']=="hapusjenis2")
					{
						include 'hapusjenis2.php';
					}
					else if ($_GET['halaman']=="ubahjenis2")
					{
						include 'ubahjenis2.php';
					}
					else if ($_GET['halaman']=="carijenis2")
					{
						include 'carijenis2.php';
					}
					else if ($_GET['halaman']=="tambahkategori2")
					{
						include 'tambahkategori2.php';
					}
					else if ($_GET['halaman']=="hapuskategori2")
					{
						include 'hapuskategori2.php';
					}
					else if ($_GET['halaman']=="ubahkategori2")
					{
						include 'ubahkategori2.php';
					}
					else if ($_GET['halaman']=="carikategori2")
					{
						include 'carikategori2.php';
					}
					else if ($_GET['halaman']=="tambahjenispembayaran2")
					{
						include 'tambahjenispembayaran2.php';
					}
					else if ($_GET['halaman']=="hapusjenispembayaran2")
					{
						include 'hapusjenispembayaran2.php';
					}
					else if ($_GET['halaman']=="ubahjenispembayaran2")
					{
						include 'ubahjenispembayaran2.php';
					}
					else if ($_GET['halaman']=="carijenispembayaran2")
					{
						include 'carijenispembayaran2.php';
					}
					else if ($_GET['halaman']=="tambahstatus2")
					{
						include 'tambahstatus2.php';
					}
					else if ($_GET['halaman']=="hapusstatus2")
					{
						include 'hapusstatus2.php';
					}
					else if ($_GET['halaman']=="ubahstatus2")
					{
						include 'ubahstatus2.php';
					}
					else if ($_GET['halaman']=="caristatus2")
					{
						include 'caristatus2.php';
					}
					else if ($_GET['halaman']=="tambahjasakirim2")
					{
						include 'tambahjasakirim2.php';
					}
					else if ($_GET['halaman']=="hapusjasakirim2")
					{
						include 'hapusjasakirim2.php';
					}
					else if ($_GET['halaman']=="ubahjasakirim2")
					{
						include 'ubahjasakirim2.php';
					}
					else if ($_GET['halaman']=="carijasakirim2")
					{
						include 'carijasakirim2.php';
					}
					else if ($_GET['halaman']=="tambahjenisjasakirim2")
					{
						include 'tambahjenisjasakirim2.php';
					}
					else if ($_GET['halaman']=="hapusjenisjasakirim2")
					{
						include 'hapusjenisjasakirim2.php';
					}
					else if ($_GET['halaman']=="ubahjenisjasakirim2")
					{
						include 'ubahjenisjasakirim2.php';
					}
					else if ($_GET['halaman']=="carijenisjasakirim2")
					{
						include 'carijenisjasakirim2.php';
					}
					else if ($_GET['halaman']=="tambahtujuan2")
					{
						include 'tambahtujuan2.php';
					}
					else if ($_GET['halaman']=="hapustujuan2")
					{
						include 'hapustujuan2.php';
					}
					else if ($_GET['halaman']=="ubahtujuan2")
					{
						include 'ubahtujuan2.php';
					}
					else if ($_GET['halaman']=="caritujuan2")
					{
						include 'caritujuan2.php';
					}
					else if ($_GET['halaman']=="tambahsistemjasa2")
					{
						include 'tambahsistemjasa2.php';
					}
					else if ($_GET['halaman']=="hapussistemjasa2")
					{
						include 'hapussistemjasa2.php';
					}
					else if ($_GET['halaman']=="ubahsistemjasa2")
					{
						include 'ubahsistemjasa2.php';
					}
					else if ($_GET['halaman']=="carisistemjasa2")
					{
						include 'carisistemjasa2.php';
					}
					else if ($_GET['halaman']=="tambahmotif2")
					{
						include 'tambahmotif2.php';
					}
					else if ($_GET['halaman']=="hapusmotif2")
					{
						include 'hapusmotif2.php';
					}
					else if ($_GET['halaman']=="ubahmotif2")
					{
						include 'ubahmotif2.php';
					}
					else if ($_GET['halaman']=="carimotif2")
					{
						include 'carimotif2.php';
					}
					else if ($_GET['halaman']=="tambahpembeli2")
					{
						include 'tambahpembeli2.php';
					}
					else if ($_GET['halaman']=="hapuspembeli2")
					{
						include 'hapuspembeli2.php';
					}
					else if ($_GET['halaman']=="ubahpembeli2")
					{
						include 'ubahpembeli2.php';
					}
					else if ($_GET['halaman']=="caripembeli2")
					{
						include 'caripembeli2.php';
					}
					else if ($_GET['halaman']=="tambahdaftarkirim2")
					{
						include 'tambahdaftarkirim2.php';
					}
					else if ($_GET['halaman']=="hapusdaftarkirim2")
					{
						include 'hapusdaftarkirim2.php';
					}
					else if ($_GET['halaman']=="ubahdaftarkirim2")
					{
						include 'ubahdaftarkirim2.php';
					}
					else if ($_GET['halaman']=="caridaftarkirim2")
					{
						include 'caridaftarkirim2.php';
					}
					else if ($_GET['halaman']=="tambahproduk2")
					{
						include 'tambahproduk2.php';
					}
					else if ($_GET['halaman']=="hapusproduk2")
					{
						include 'hapusproduk2.php';
					}
					else if ($_GET['halaman']=="ubahproduk2")
					{
						include 'ubahproduk2.php';
					}
					else if ($_GET['halaman']=="cariproduk2")
					{
						include 'cariproduk2.php';
					}
					else if ($_GET['halaman']=="detail2")
					{
						include 'detail2.php';
					}
					else if ($_GET['halaman']=="pembayaran2")
					{
						include 'pembayaran2.php';
					}
					else if ($_GET['halaman']=="penilaian2")
					{
						include 'penilaian2.php';
					}
					else if ($_GET['halaman']=="logout")
					{
						include 'logout.php';
					}
					else if ($_GET['halaman']=="admin")
					{
						include 'admin.php';
					}
					else if ($_GET['halaman']=="tambahadmin")
					{
						include 'tambahadmin.php';
					}
					else if ($_GET['halaman']=="ubahadmin")
					{
						include 'ubahadmin.php';
					}
					else if ($_GET['halaman']=="hapusadmin")
					{
						include 'hapusadmin.php';
					}
					else if ($_GET['halaman']=="laporan_penjualan2")
					{
						include 'laporan_penjualan2.php';
					}
					else if ($_GET['halaman']=="laporan_stokproduk2")
					{
						include 'laporan_stokproduk2.php';
					}
					else if ($_GET['halaman']=="laporan_produkterlaris2")
					{
						include 'laporan_produkterlaris2.php';
					}
					else if ($_GET['halaman']=="carifaktur2")
					{
						include 'carifaktur2.php';
					}
					else if ($_GET['halaman']=="caristok2")
					{
						include 'caristok2.php';
					}
					else if ($_GET['halaman']=="pencarianrating2")
					{
						include 'pencarianrating2.php';
					}
					else if ($_GET['halaman']=="caristatusfaktur2")
					{
						include 'caristatusfaktur2.php';
					}
				}
				else
				{
					include 'home.php';
				}
				?>
    </section>
    </section>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>