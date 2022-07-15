<?php


if($_SERVER['REQUEST_METHOD']=='POST'){


	$id_gps   = $_POST['id_gps'];
	$imei     = $_POST['imei'];
	$internet = $_POST['internet'];
	$sms     = $_POST['sms'];
	
		

	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "UPDATE tr_gps SET imei = '$imei',
	internet = '$internet', sms = '$sms'
	 where id_gps = '$id_gps';";

	if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data GPS';
	}else{
		echo 'Gagal Update Data GPS';
	}

	mysqli_close($con);
}
?>
