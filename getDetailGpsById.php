<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$id_gps = $_POST['id_gps'];

$sql = "SELECT * FROM tr_gps WHERE id_gps = '$id_gps'";
require_once('koneksi.php');
//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$r = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($r))
{

 array_push($result,array(
    'imei' => $row['imei'],
    'internet' => $row['internet'],
    'sms' => $row['sms'],
    'update_date'=>$row['update_date']
    ));
}
echo json_encode(array('result'=>$result));
mysqli_close($con);
}
?>