<?php


	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sqlawal = "SELECT * FROM m_unit ";
	
	//Mendapatkan Hasil
	
	$aksiawal = mysqli_query($con,$sqlawal); /*$con adalah koneksi,  $sql adalah perintah*/
	

	
	
	
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
	
	
	$arrayPenampungan = array();
	
	
	// while($row = mysqli_fetch_array($aksiawal)){
		
		while(
			
			$ambil = mysqli_fetch_array($aksiawal)) /*ini proses mengambil dan diulang2 dgn while*/
			{
				$nama_unit = $ambil["nama_unit"];
				$sqlunit = "SELECT * FROM m_unit WHERE nama_unit = '$nama_unit' ";
				$aksiunit = mysqli_query($con,$sqlunit); /*$con adalah koneksi,  $sql adalah perintah*/		
				$ambil2 = mysqli_fetch_array($aksiunit);
				
				$no_plat = $ambil2['no_plat'];

				// var_dump($no_plat);
	
			
						
			// var_dump($nama_unit);
			$arrayRow = array (
				"nomor_plat"=>$no_plat
			);

		array_push($arrayPenampungan,$arrayRow);

		
		}

		echo json_encode(array ('result'=>$arrayPenampungan));
		mysqli_close($con);

		// $id=$row['id_unit'];
		// var_dump($id[]);
		



// }



	//Membuat Array Kosong
	$hasil = array();


	// while($row = mysqli_fetch_array($aksiawal)){

	// 	//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat

	// 	$arrayRow = array (
	// 		"id_perjalanan"=>$row['id_perjalanan'],
	// 		"nama_unit"=>$row['nama_unit'],
	// 		"driver"=>$row['driver'],
	// 		"asal"=>$row['asal'],
	// 		"tujuan"=>$row['tujuan'],			
	// 		"status"=>$row['cek']);			
		

	// 	array_push($hasil,$arrayRow);
	// }

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
	// echo json_encode(array ('result'=>$hasil));

	// mysqli_close($con);
?>
