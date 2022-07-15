<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id_perjalanan = $_POST['id_perjalanan'];
		$lattitude = $_POST['lattitude'];
		$longitude = $_POST['longitude'];


	

//ganti query insert data lokasi

		//Pembuatan Syntax SQL
$sql = "INSERT INTO 
tr_pelacakan(id_perjalanan,lattitude,longitude)
 VALUES 
('$id_perjalanan','$lattitude','$longitude')";


		require_once('koneksi.php');
		//Import File Koneksi database
		//Eksekusi Query database

		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan data lokasi';
		}else{
			echo 'Gagal Menambahkan data lokasi';
		}

		mysqli_close($con);

	}
?>


