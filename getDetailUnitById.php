<?php 

$id_unit = $_POST['id_unit'];

$sql = "SELECT * FROM m_unit WHERE id_unit = '$id_unit'";
require_once('koneksi.php');
//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$r = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($r))
{

 array_push($result,array(
    'nama_unit' => $row['nama_unit'],
    'no_plat' => $row['no_plat'],
    'id_gps'=>$row['id_gps']
    ));
}
echo json_encode(array('result'=>$result));
mysqli_close($con);
?>