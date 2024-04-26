<?php
session_start();
$koneksi=new mysqli("localhost" , "root" , "" , "adi"); 
$motif = "";
$kategori = "";
$jenis = "";
$warna = "";
$strq = "";
$strw = "";
$jmlget = 0;
	if(isset($_GET['motif']))
	{
      $motif = $_GET['motif'];
      $strc[] = "produk.Id_Motif = '$motif'";
      $jmlget++;
    }
    if(isset($_GET['kategori']))
	{
      $kategori = $_GET['kategori'];
      $strc[] = "motif.Id_Kategori = '$kategori'";
      $jmlget++;
    }
	if(isset($_GET['jenis']))
	{
      $jenis = $_GET['jenis'];
	  $strc[] = "kategori.Id_Jenis= '$jenis'";
      $jmlget++;
    }
    if(isset($_GET['warna']))
	{
      $warna = $_GET['warna'];
      $strc[] = "produk.Id_Warna = '$warna'";
      $jmlget++;
    }
    // susun string
    $i = 1;
    if($jmlget > 0)
	{
      $strw = "WHERE ";
      foreach($strc as $strs)
	  {
        $strw .= $strs;
        if($i < $jmlget)
		{
          $strw .= " AND ";
          $i++;
        }
      }
    }
    $query = "SELECT * FROM `produk` inner join warna on produk.Id_Warna=warna.Id_Warna
			 inner join motif on produk.Id_Motif=motif.Id_Motif inner join 
			 kategori on motif.Id_Kategori=kategori.Id_Kategori inner join
			 jenis on kategori.Id_Jenis=jenis.Id_Jenis
    $strw";
    $result=mysqli_query($koneksi,$query);
    $resnum = mysqli_num_rows($result);
	
	$query_motif  = "SELECT * FROM motif";
    $result_motif = mysqli_query($koneksi,$query_motif);

    $query_kategori  = "SELECT * FROM kategori";
    $result_kategori = mysqli_query($koneksi,$query_kategori);

	$query_jenis  = "SELECT * FROM jenis";
	$result_jenis = mysqli_query($koneksi,$query_jenis);
	
    $query_warna  = "SELECT * FROM warna";
    $result_warna = mysqli_query($koneksi,$query_warna);

    $title = "adi"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Burai SHOP </title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<BODY STYLE="BACKGROUND-IMAGE:URL(index.png)">
<?php include'menu.php'?>
<!--konten-->
<section class="konten">
	<div class="container">
		<marquee><b><font face="cornsilk" color="darkblue" size="30"> Welcome to Si-Pow Burai </marquee></b></font>
	<div class="row">
    <form action="index.php" method="GET">
        <div class="row">
            <div class="col-sm">
				<div class="col-md-12 col-lg-3 products-number-sort">
					<div class="products-sort-by mt-2 mt-lg-0">
						<select name="jenis" class="form-control">
							<option selected disabled>-- PILIH JENIS -- </option>
								<?php while($row = mysqli_fetch_assoc($result_jenis)) { ?>
									<option value="<?php echo $row['Id_Jenis']; ?>"> <?php echo $row['Nm_Jenis']; ?></option>
								<?php } ?>
						</select>
                    </div>
				</div>
				<div class="col-md-12 col-lg-3 products-number-sort">
					<div class="products-sort-by mt-2 mt-lg-0">
						<select name="kategori" class="form-control">
							<option selected disabled>-- PILIH KATEGORI -- </option>
							 <?php while($row = mysqli_fetch_assoc($result_kategori)) { ?>
								<option value="<?php echo $row['Id_Kategori']; ?>"> <?php echo $row['Nm_Kategori']; ?></option>
							 <?php } ?>
						</select>
                     </div>
				</div>
				<div class="col-md-12 col-lg-3 products-number-sort">
					<div class="products-sort-by mt-2 mt-lg-0">
						<select name="motif" class="form-control">
							<option selected disabled>-- PILIH MOTIF -- </option>
							 <?php while($row = mysqli_fetch_assoc($result_motif)) { ?>
								<option value="<?php echo $row['Id_Motif']; ?>"> <?php echo $row['Nm_Motif']; ?></option>
							 <?php } ?>
						</select>
                     </div>
				</div>	  
				<div class="col-md-12 col-lg-3 products-number-sort">
					<div class="products-sort-by mt-2 mt-lg-0">
						<select name="warna" class="form-control">
							<option selected disabled>-- PILIH WARNA -- </option>
							 <?php while($row = mysqli_fetch_assoc($result_warna)) { ?>
								<option value="<?php echo $row['Id_Warna']; ?>"> <?php echo $row['Nm_Warna']; ?></option>
							 <?php } ?>
						</select>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<input type="submit" class="btn btn-primary mb-4" name="submit" value="Search">
				</div>
			</div>
			<?php if($resnum == 0){ ?>
			<div clas="row">
				<div class="alert alert-danger"><strong><font size="4">Produk tidak tersedia</strong></div>
			</div>
			<?php } ?>
		</div>
	</form>
	<br>
		<div class="row">
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="Foto/<?php echo $row['Foto'];?>" alt="">
					<div class="caption text-center">
						<h4><strong> <?php echo $row['Nm_Produk'];?></strong> </h4>
						<h5> Rp.<?php echo number_format($row['Harga']);?></h5>
						<h5>Stok: <?php echo $row['Stok']; ?></h5>
						<a href="beli.php?id=<?php echo $row['Id_Produk'];?>" class="btn btn-success">Beli Sekarang</a>
						<a href="detail.php?id=<?php echo $row["Id_Produk"]?>" class="btn btn-primary">Detail Produk</a>
					</div>
				</div>
			</div>
			<?php }?>	
		</div>
	</div>
	</div>
</section>
</body>
</html>



