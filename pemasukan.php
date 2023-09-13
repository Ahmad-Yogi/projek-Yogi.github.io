<?php 
require_once('koneksi.php');

	if (!empty($_POST['Tanggal'])) {
		$Tanggal = $_POST['Tanggal'];
		$Pemasukan = $_POST['Pemasukan'];
		$Keterangan_Pemasukan = $_POST['Keterangan_Pemasukan'];
		
		$data[] = $Tanggal;
		$data[] = $Pemasukan;
		$data[]	= $Keterangan_Pemasukan;
		
		$sql='INSERT INTO laporankeuangan (Tanggal,Pemasukan,Keterangan_Pemasukan)VALUES(?,?,?)';
		$row=$koneksi->prepare($sql);
		$row->execute($data);

		echo '<script>alert("Berhasil Tambah Data");window.location="laporan.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Laporan Pemasukan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <style type="text/css">
        .navtop{
		background-color: #3f69a8;
		height: 60px;
		width: 100%;
		border: 0;
		}
		.navtop div {
				display: flex;
				margin: 0 auto;
				width: 1000px;
				height: 100%;
		}
		.navtop div h1, .navtop div a{
				display: inline-flex;
				align-items: center;
		}
		.navtop div a.nav-bar{
				flex: 1;
				font-size: 24px;
				padding: 0;
				margin: 0;
				color: #ecf0f6;
				font-weight: normal;
				text-decoration: none;
		}
		.navtop div a.nav-bar .logo{
			display: inline-flex;
			margin-top: 15px;
			margin-bottom: 15px;
			padding: 0px;
		}
		.navtop div a.menu-bar{
				padding: 0 20px;
				text-decoration: none;
				color: #c5d2e5;
				font-weight: bold;
		}
		.navtop div a.menu-bar i{
				padding: 2px 8px 0 0;
		}
		.navtop div a.menu-bar :hover{
				color: #ecf0f6;
		}
    </style>
</head>
<body>
	<nav class="navtop">
	<div>
		<a class="nav-bar" href="index.php">
			<img class="logo" src="images/logo.png" alt="Logo Website" width="30" height="30">
			Manajemen Keuangan Masjid</a>
		<a class="menu-bar" href="index.php"><i class="fas fa-home"></i>Home</a>
		<a class="menu-bar" href="laporan.php"><i class="fas fa-sticky-note"></i>Catatan Keuangan</a>
	</div>
	</nav>
	<div class="container">
		<br/>
		<h3>Tambah Laporan Pemasukan</h3>
		<br/>
		<div class="row">
			<div class="col-lg-6">
				<form action="" method="POST">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" value="" class="form-control" name="Tanggal">
					</div>
					<div class="form-group">
						<label>Pemasukan</label>
						<input type="number" value="" placeholder="Masukan Jumlah Pemasukan" class="form-control" name="Pemasukan">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" value="" placeholder="Masukan Keterangan" class="form-control" name="Keterangan_Pemasukan">
					</div>
					<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"></i> Tambah</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>