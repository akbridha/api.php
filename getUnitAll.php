<?php



	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM m_unit";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array(
			"id_unit"=>$row['id_unit'],
			"nama_unit"=>$row['nama_unit'],
			"jenis_unit"=>$row['jenis_unit'],
			"no_plat"=>$row['no_plat'],
			"id_gps"=>$row['id_gps']
			
		));
	}

	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
