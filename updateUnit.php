<?php


if($_SERVER['REQUEST_METHOD']=='POST'){


	$id_unit = $_POST['id_unit'];
	$nama_unit = $_POST['nama_unit'];
    $no_plat = $_POST['no_plat'];
    $id_gps = $_POST['id_gps'];
	
	
		

	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "UPDATE m_unit SET 
	nama_unit = '$nama_unit', no_plat = '$no_plat', id_gps = '$id_gps'
	 where id_unit = '$id_unit';";

	if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data Unit';
	}else{
		echo 'Gagal Update Data Unit';
	}

	mysqli_close($con);
}
?>
