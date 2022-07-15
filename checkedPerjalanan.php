<?php


if($_SERVER['REQUEST_METHOD']=='POST'){


	$id_perjalanan   = $_POST['id_perjalanan'];
	$cek   = $_POST['cek'];

	
		

	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "UPDATE tr_perjalanan SET cek = '$cek'
	 where id_perjalanan = '$id_perjalanan';";

	if(mysqli_query($con,$sql)){
		echo 'Berhasil tinjau pejalanan';
	}else{
		echo 'Gagal tinjau pejalanan';
	}

	mysqli_close($con);
}
?>