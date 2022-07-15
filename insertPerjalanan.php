<?php

 

	if($_SERVER['REQUEST_METHOD']=='POST'){


		//untuk id perjalanan sdh auto increment

		$id_unit = $_POST['id_unit'];
		$driver = $_POST['driver'];
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$cek = "0";
		
	

//ganti query insert data perjalanan

		//Pembuatan Syntax SQL
$sql = "INSERT INTO 
tr_perjalanan(id_unit,driver,asal,tujuan,cek)
 VALUES 
('$id_unit','$driver','$asal','$tujuan','$cek')";


		require_once('koneksi.php');
		//Import File Koneksi database
		//Eksekusi Query database

		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan data Perjalanan';
		}else{
			echo 'Gagal Menambahkan data Perjalanan';
		}

		mysqli_close($con);

	}
?>


