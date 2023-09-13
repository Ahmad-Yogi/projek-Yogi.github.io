<?php
    require_once('koneksi.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Laporan Keuangan Masjid</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
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
        <a class="menu-bar" href="home.php"><i class="fas fa-home"></i>Home</a>
        <a class="menu-bar" href="laporan.php"><i class="fas fa-sticky-note"></i>Catatan Keuangan</a>
    </div>
    </nav>
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<br/>
 				<a href="pemasukan.php" class="btn btn-success btn-md"><span class=" fas fa-money-bill-wave-alt"></span> Pemasukan</a>
                <a href="pengeluaran.php" class="btn btn-success btn-md"><span class="fa-solid fa-money-bill-trend-up"></span> Pengeluaran</a>
 				<table class="table table-hover table-border" style="margin-top: 10px;">
 					<tr class="success">
 						<th width="50px">No</th>
 						<th>Tanggal</th>
 						<th>Pemasukan</th>
 						<th>Keterangan</th>
                        <th>Pengeluaran</th>
 						<th>Keterangan</th>
                        <th>Total</th>
 						<th style="text-align: center;">Hapus</th>
 					</tr>
 					<?php
 						$sql = "SELECT * FROM laporankeuangan";
 						$row = $koneksi->prepare($sql);
 						$row->execute();
 						$hasil = $row->fetchAll();
 						$a = 1;
 					 ?>
 					<?php foreach ($hasil as $isi) :?>
 					<tr>
 						<td><?= $a ?></td>
 						<td><?= $isi['Tanggal']; ?></td>
 						<td><?= $isi['Pemasukan']; ?></td>
 						<td><?= $isi['Keterangan_Pemasukan']; ?></td>
 						<td><?= $isi['Pengeluaran']; ?></td>
                        <td><?= $isi['Keterangan_Pengeluaran']; ?></td>
                        <td><?= $isi['Total']; ?></td>
 						<td style="text-align: center;">
 							<a oneclick="return confirm('Apakah yakin data akan dihapus?')" href="hapus.php?id=<?= $isi['id']; ?>" class="btn btn-danger btn-md">
 								<span class="fa fa-trash"></span>
 							</a>
 						</td>
 					</tr>
 					<?php $a++ ?>
 					<?php endforeach; ?>
 				</table>
 			</div>
 		</div>
 	</div>
 </body>
 </html>