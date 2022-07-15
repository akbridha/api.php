<?php


	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM tbl_user  ";
	

	//Mendapatkan Hasil
	$aksi = mysqli_query($con,$sql); /*$con adalah koneksi,  $sql adalah perintah*/


// alur 

// ambil variabel $con dari file koneksi.php dengan require_once
// lalu masukkan kode perintah ke dalam variable yang bernama $sql.
// lalu eksekusi dengan mysqli_query tapi langsung dimasukkan ke variable $r
// buat array kosong dengan nama $hasil 
// hasil eksekusi dari $r dieksekusi lagi dengan fetch array
// =>lalu dimasukkan kedalam variabel $row 
// => dan diloop menggunakan while
// =>loop yang dieksekusi adalah memasukkan hasil dari $row  kedalam $arrayRow
// memasukkan $arrayRow ke dalam array kosoong tadi yg bernama $hasil dengan printah array push
// json_encode adalah membuat hasil akhir dari semua eksekusi tadi kedalam format json



	//Membuat Array Kosong
	$hasil = array();

	while($row = mysqli_fetch_array($aksi)){

		// secret ingredient
		// $id_unit = $row["id_unit"];
		// $sqlunit = "SELECT * FROM m_unit WHERE id_unit = '$id_unit' ";
		// 		$aksiunit = mysqli_query($con,$sqlunit); /*$con adalah koneksi,  $sql adalah perintah*/		
		// 		$ambil2 = mysqli_fetch_array($aksiunit);
				
		// 		$nama_unit = $ambil2['nama_unit'];



		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat

		$arrayRow = array (
			"id_user"=>$row['id_user'],
			"email"=>$row['email'],
			"encrypted_password"=>$row['encrypted_password']);			
		

		array_push($hasil,$arrayRow);
	}

	// $row = mysqli_fetch_array($r);
	// array_push(
	// 	$result,array (
	// 					"id_perjalanan"=>$row['id_perjalanan'],
	// 					"driver"=>$row['driver'],
	// 					"asal"=>$row['asal'],
	// 					"tujuan"=>$row['tujuan']
	// 							)
	// 						);

	

	//Menampilkan Array dalam Format JSON
	echo json_encode(array ('result'=>$hasil));

	mysqli_close($con);
?>
