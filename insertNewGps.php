
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

$imei = $_POST['imei'];
$card_number = $_POST['card_number'];
$sms = $_POST['sms'];
$internet = $_POST['internet'];




//ganti query insert data lokasi

//Pembuatan Syntax SQL
$sql = "INSERT INTO 
tr_gps(imei,card_number,sms,internet)
VALUES 
('$imei','$card_number','$sms','$internet')";


require_once('koneksi.php');
//Import File Koneksi database
//Eksekusi Query database

if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan data gps';
}else{
    echo 'Gagal Menambahkan data gps';
}

mysqli_close($con);

}
?>


