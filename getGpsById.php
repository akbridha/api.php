<?php



	//Import File Koneksi Database
	require_once('koneksi.php');

	$id_gps= $_POST['id_gps'];

	//Membuat SQL Query
	$sql = "SELECT * FROM tr_gps where id_gps  = '$id_gps'";
	

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array (
			"id_gps"=>$row['id_gps'],
			"card_number"=>$row['card_number'],
            "internet"=>$row['internet'],
            "sms"=>$row['sms']
            			
		
			
		));
	}

	

	//Menampilkan Array dalam Format JSON
	echo json_encode(array ('result'=>$result));

	mysqli_close($con);
?>
