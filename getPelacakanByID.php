<?php



	//Import File Koneksi Database
	require_once('koneksi.php');

	$key= $_POST['key'];

	
	// $sql = "SELECT * FROM tr_pelacakan ";
	
	$sql = "SELECT * FROM tr_pelacakan where id_perjalanan  = '$key'";
	

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Membuat Array Kosong
	$result = array();

	while($row = mysqli_fetch_array($r)){

		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat
		array_push($result,array (
			"id_pelacakan"=>$row['id_pelacakan'],
			"lat"=>$row['lattitude'],
			"lng"=>$row['longitude']
			
		
			
		));
	}

	

	//Menampilkan Array dalam Format JSON
	echo json_encode(array ('result'=>$result));

	mysqli_close($con);
?>
