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
  <title> Burai SHOP | Admin</title>
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
      <span class="logo-lg"><b>Admin</b></span>
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
        <li><a href="index.php"><img src ="assets/dist/img/home.png"><b><font face="algeria" size="2,5"><span> Home</span></a></li></font></b>
		<li><a href="index.php?halaman=laporan_penjualan"><img src ="assets/dist/img/pencil.png"><b><font face="algeria" size="2,5"><span> Laporan Transaksi</span></font></a></b></li>
		<li><a href="index.php?halaman=laporan_stokproduk"><img src ="assets/dist/img/2.png"><b><font face="algeria" size="2,5"><span> Laporan Stok Produk</span></a></li></font></b>
		<li><a href="index.php?halaman=laporan_produkterlaris"><img src ="assets/dist/img/post-it.png"><b><font face="algeria" size="2,5"><span> Laporan Penjualan</span></a></li></font></b>
		<li><a href="index.php?halaman=pencarianrating"><img src ="assets/dist/img/star.png"><b><font face="algeria" size="2,5"><span> Pencarian Rating</span></a></li></font></b>
		<li><a href="index.php?halaman=warna"><img src ="assets/dist/img/rattle.png"><b><font face="algeria" size="2,5"><span> Warna</span></a></li></font></b>
		<li><a href="index.php?halaman=jenis"><img src ="assets/dist/img/chromatography.png"><b><font face="algeria" size="2,5"><span> Jenis</span></a></li></font></b>
		<li><a href="index.php?halaman=kategori"><img src ="assets/dist/img/stationery.png"><b><font face="algeria" size="2,5"><span> Kategori</span></a></li></font></b>
		<li><a href="index.php?halaman=motif"><img src ="assets/dist/img/coronavirus.png"><b><font face="algeria" size="2,5"><span> Motif</span></a></li></font></b>
		<li><a href="index.php?halaman=jenispembayaran"><img src ="assets/dist/img/membership.png"><b><font face="algeria" size="2,5"><span> Jenis Pembayaran</span></a></li></font></b>
		<li><a href="index.php?halaman=status"><img src ="assets/dist/img/report.png"><b><font face="algeria" size="2,5"><span> Status</span></a></li></font></b>
		<li><a href="index.php?halaman=jasakirim"><img src ="assets/dist/img/monday.png"><b><font face="algeria" size="2,5"><span> Jasa Kirim</span></a></li></font></b>
		<li><a href="index.php?halaman=jenisjasakirim"><img src ="assets/dist/img/paper-clip.png"><b><font face="algeria" size="2,5"><span> Jenis Jasa Kirim</span></a></li></font></b>
		<li><a href="index.php?halaman=tujuan"><img src ="assets/dist/img/delivery-truck.png"><b><font face="algeria" size="2,5"><span> Tujuan</span></a></li></font></b>
		<li><a href="index.php?halaman=sistemjasa"><img src ="assets/dist/img/extensions-folder.png"><b><font face="algeria" size="2,5"><span> Sistem Jasa</span></a></li></font></b>
		<li><a href="index.php?halaman=daftarkirim"><img src ="assets/dist/img/dash.png"><b><font face="algeria" size="2,5"><span> Daftar Kirim</span></a></li></font></b>
		<li><a href="index.php?halaman=pembeli"><img src ="assets/dist/img/portrait.png"><b><font face="algeria" size="2,5"><span> Pembeli</span></a></li></font></b>
		<li><a href="index.php?halaman=produk"><img src ="assets/dist/img/notebook.png"><b><font face="algeria" size="2,5"><span> Produk</span></a></li></font></b>
		<li><a href="index.php?halaman=faktur"><img src ="assets/dist/img/open-book.png"><b><font face="algeria" size="2,5"><span>  Faktur</span></a></li></font></b>
		<li><a href="index.php?halaman=logout"><img src ="assets/dist/img/account.png"><b><font face="algeria" size="2,5"><span> Logout</span></a></li></font></b>
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
					if ($_GET['halaman']=="warna")
					{
						include 'warna.php';
					}
					else if ($_GET['halaman']=="jenis")
					{
						include 'jenis.php';
					}
					else if ($_GET['halaman']=="kategori")
					{
						include 'kategori.php';
					}
					else if ($_GET['halaman']=="motif")
					{
						include 'motif.php';
					}
					else if ($_GET['halaman']=="jenispembayaran")
					{
						include 'jenispembayaran.php';
					}
					else if ($_GET['halaman']=="status")
					{
						include 'status.php';
					}
					else if ($_GET['halaman']=="jasakirim")
					{
						include 'jasakirim.php';
					}
					else if ($_GET['halaman']=="jenisjasakirim")
					{
						include 'jenisjasakirim.php';
					}
					else if ($_GET['halaman']=="tujuan")
					{
						include 'tujuan.php';
					}
					else if ($_GET['halaman']=="sistemjasa")
					{
						include 'sistemjasa.php';
					}
					else if ($_GET['halaman']=="daftarkirim")
					{
						include 'daftarkirim.php';
					}
					else if ($_GET['halaman']=="pembeli")
					{
						include 'pembeli.php';
					}
					else if ($_GET['halaman']=="produk")
					{ 
						include 'produk.php';
					}
					else if ($_GET['halaman']=="faktur")
					{
						include 'faktur.php';
					}
					else if ($_GET['halaman']=="tambahwarna")
					{
						include 'tambahwarna.php';
					}
					else if ($_GET['halaman']=="hapuswarna")
					{
						include 'hapuswarna.php';
					}
					else if ($_GET['halaman']=="ubahwarna")
					{
						include 'ubahwarna.php';
					}
					else if ($_GET['halaman']=="cariwarna")
					{
						include 'cariwarna.php';
					}
					else if ($_GET['halaman']=="tambahjenis")
					{
						include 'tambahjenis.php';
					}
					else if ($_GET['halaman']=="hapusjenis")
					{
						include 'hapusjenis.php';
					}
					else if ($_GET['halaman']=="ubahjenis")
					{
						include 'ubahjenis.php';
					}
					else if ($_GET['halaman']=="carijenis")
					{
						include 'carijenis.php';
					}
					else if ($_GET['halaman']=="tambahkategori")
					{
						include 'tambahkategori.php';
					}
					else if ($_GET['halaman']=="hapuskategori")
					{
						include 'hapuskategori.php';
					}
					else if ($_GET['halaman']=="ubahkategori")
					{
						include 'ubahkategori.php';
					}
					else if ($_GET['halaman']=="carikategori")
					{
						include 'carikategori.php';
					}
					else if ($_GET['halaman']=="tambahjenispembayaran")
					{
						include 'tambahjenispembayaran.php';
					}
					else if ($_GET['halaman']=="hapusjenispembayaran")
					{
						include 'hapusjenispembayaran.php';
					}
					else if ($_GET['halaman']=="ubahjenispembayaran")
					{
						include 'ubahjenispembayaran.php';
					}
					else if ($_GET['halaman']=="carijenispembayaran")
					{
						include 'carijenispembayaran.php';
					}
					else if ($_GET['halaman']=="tambahstatus")
					{
						include 'tambahstatus.php';
					}
					else if ($_GET['halaman']=="hapusstatus")
					{
						include 'hapusstatus.php';
					}
					else if ($_GET['halaman']=="ubahstatus")
					{
						include 'ubahstatus.php';
					}
					else if ($_GET['halaman']=="caristatus")
					{
						include 'caristatus.php';
					}
					else if ($_GET['halaman']=="tambahjasakirim")
					{
						include 'tambahjasakirim.php';
					}
					else if ($_GET['halaman']=="hapusjasakirim")
					{
						include 'hapusjasakirim.php';
					}
					else if ($_GET['halaman']=="ubahjasakirim")
					{
						include 'ubahjasakirim.php';
					}
					else if ($_GET['halaman']=="carijasakirim")
					{
						include 'carijasakirim.php';
					}
					else if ($_GET['halaman']=="tambahjenisjasakirim")
					{
						include 'tambahjenisjasakirim.php';
					}
					else if ($_GET['halaman']=="hapusjenisjasakirim")
					{
						include 'hapusjenisjasakirim.php';
					}
					else if ($_GET['halaman']=="ubahjenisjasakirim")
					{
						include 'ubahjenisjasakirim.php';
					}
					else if ($_GET['halaman']=="carijenisjasakirim")
					{
						include 'carijenisjasakirim.php';
					}
					else if ($_GET['halaman']=="tambahtujuan")
					{
						include 'tambahtujuan.php';
					}
					else if ($_GET['halaman']=="hapustujuan")
					{
						include 'hapustujuan.php';
					}
					else if ($_GET['halaman']=="ubahtujuan")
					{
						include 'ubahtujuan.php';
					}
					else if ($_GET['halaman']=="caritujuan")
					{
						include 'caritujuan.php';
					}
					else if ($_GET['halaman']=="tambahsistemjasa")
					{
						include 'tambahsistemjasa.php';
					}
					else if ($_GET['halaman']=="hapussistemjasa")
					{
						include 'hapussistemjasa.php';
					}
					else if ($_GET['halaman']=="ubahsistemjasa")
					{
						include 'ubahsistemjasa.php';
					}
					else if ($_GET['halaman']=="carisistemjasa")
					{
						include 'carisistemjasa.php';
					}
					else if ($_GET['halaman']=="tambahmotif")
					{
						include 'tambahmotif.php';
					}
					else if ($_GET['halaman']=="hapusmotif")
					{
						include 'hapusmotif.php';
					}
					else if ($_GET['halaman']=="ubahmotif")
					{
						include 'ubahmotif.php';
					}
					else if ($_GET['halaman']=="carimotif")
					{
						include 'carimotif.php';
					}
					else if ($_GET['halaman']=="tambahpembeli")
					{
						include 'tambahpembeli.php';
					}
					else if ($_GET['halaman']=="hapuspembeli")
					{
						include 'hapuspembeli.php';
					}
					else if ($_GET['halaman']=="ubahpembeli")
					{
						include 'ubahpembeli.php';
					}
					else if ($_GET['halaman']=="caripembeli")
					{
						include 'caripembeli.php';
					}
					else if ($_GET['halaman']=="tambahdaftarkirim")
					{
						include 'tambahdaftarkirim.php';
					}
					else if ($_GET['halaman']=="hapusdaftarkirim")
					{
						include 'hapusdaftarkirim.php';
					}
					else if ($_GET['halaman']=="ubahdaftarkirim")
					{
						include 'ubahdaftarkirim.php';
					}
					else if ($_GET['halaman']=="caridaftarkirim")
					{
						include 'caridaftarkirim.php';
					}
					else if ($_GET['halaman']=="tambahproduk")
					{
						include 'tambahproduk.php';
					}
					else if ($_GET['halaman']=="hapusproduk")
					{
						include 'hapusproduk.php';
					}
					else if ($_GET['halaman']=="ubahproduk")
					{
						include 'ubahproduk.php';
					}
					else if ($_GET['halaman']=="cariproduk")
					{
						include 'cariproduk.php';
					}
					else if ($_GET['halaman']=="detail")
					{
						include 'detail.php';
					}
					else if ($_GET['halaman']=="pembayaran")
					{
						include 'pembayaran.php';
					}
					else if ($_GET['halaman']=="penilaian")
					{
						include 'penilaian.php';
					}
					else if ($_GET['halaman']=="logout")
					{
						include 'logout.php';
					}
					else if ($_GET['halaman']=="laporan_penjualan")
					{
						include 'laporan_penjualan.php';
					}
					else if ($_GET['halaman']=="laporan_stokproduk")
					{
						include 'laporan_stokproduk.php';
					}
					else if ($_GET['halaman']=="laporan_produkterlaris")
					{
						include 'laporan_produkterlaris.php';
					}
					else if ($_GET['halaman']=="carifaktur")
					{
						include 'carifaktur.php';
					}
					else if ($_GET['halaman']=="caristok")
					{
						include 'caristok.php';
					}
					else if ($_GET['halaman']=="pencarianrating")
					{
						include 'pencarianrating.php';
					}
					else if ($_GET['halaman']=="caristatusfaktur")
					{
						include 'caristatusfaktur.php';
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