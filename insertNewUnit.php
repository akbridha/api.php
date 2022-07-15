
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

$nama_unit = $_POST['nama_unit'];
$jenis_unit = $_POST['jenis_unit'];
$no_plat = $_POST['no_plat'];
$id_gps = $_POST['id_gps'];




//ganti query insert data lokasi

//Pembuatan Syntax SQL
$sql = "INSERT INTO 
m_unit(nama_unit,jenis_unit,no_plat,id_gps)
VALUES 
('$nama_unit','$jenis_unit','$no_plat','$id_gps')";


require_once('koneksi.php');
//Import File Koneksi database
//Eksekusi Query database

if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan data unit';
}else{
    echo 'Gagal Menambahkan data unit';
}

mysqli_close($con);

}
?>


