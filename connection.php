<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname  = "assignment";

  $conn =  mysqli_connect($servername,$username,$password, $dbname );
   
   if($conn)
   {
   /// echo "connection sucessfully";///
   }
   else
   {
    echo "connection failed".mysqli_connect_error();
   }
?>