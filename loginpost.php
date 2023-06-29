<?php
 $Id = $_GET['user'];
 $pass = $_GET['password'];

if ($Id=='customer1' && $pass='customer1') {
    header("location:form.php");
}
else{
if ($Id=='customer2' && $pass='customer2') {
    header("location:form.php");
}
else{
if ($Id=='admin' && $pass='admin') {
        header("location:table.php");
    }
    else{
        echo"Invalid";
    }
}
}



   

?>