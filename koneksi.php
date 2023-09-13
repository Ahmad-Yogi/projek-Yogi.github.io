<?php 
	$user = 'root';
	$pass = '';
	try{
		$koneksi=new PDO('mysql:host=localhost;dbname=db_keuangan;',$user,$pass);
		$koneksi->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOExecption $e){
		print "Koneksi atau query bermasalah : ". $e->getMessage(). "<br/>";
		die();
	}
?>