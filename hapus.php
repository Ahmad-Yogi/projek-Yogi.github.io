<?php
	require_once('koneksi.php');

	$id		= $_GET['id'];
	$sql	= "DELETE FROM laporanKeuangan WHERE id= ?";
	$row 	= $koneksi->prepare($sql);
	$row->execute(array($id));
	
	echo '<script>alert("Berhasil Hapus Data");window.location="laporan.php"</script>';
 ?>