<?php

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

if($_SERVER['REQUEST_METHOD']=='POST'){
$email = $_POST['email'];
$userpassword = $_POST['password'];

	//Import File Koneksi Database
	require_once('koneksi.php');

	//Membuat SQL Query
	$sql = "SELECT * FROM tbl_user WHERE email = '$email' ";
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql); /*$con adalah koneksi,  $sql adalah perintah*/

	//Membuat Array Kosong
	$hasil = array();

	while($row = mysqli_fetch_assoc($r)){
		// secret ingredient
        $Password = $row["encrypted_password"];              
        if($Password == $userpassword){
            $hasil = "true";}
        else{
            $hasil = "false";}
    }
        
	$result = array();
	array_push(
		$result,array (
						"hasil"=>$hasil,));
	

	//Menampilkan Array dalam Format JSON
	echo json_encode(array ('result'=>$result));

    mysqli_close($con);
    }
?>



