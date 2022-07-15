<?php



	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM tr_perjalanan where cek = '0'";
	

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array (
			"id_perjalanan"=>$row['id_perjalanan'],
			"driver"=>$row['driver'],
			"asal"=>$row['asal'],
			"tujuan"=>$row['tujuan']
			
		
			
		));
	}

	

	//Menampilkan Array dalam Format JSON
	echo json_encode(array ('result'=>$result));

	mysqli_close($con);
?>
