<?php

 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','lulus');

 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) 
 ;
  // or die('Gagal menghubungkan Dengan Database');

  if ($con){
    echo"success";
  }else
  {echo"fail";}


// }else{
//     echo"succes";
// }

 ?>




 


