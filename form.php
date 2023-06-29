<?php include("connection.php"); 
$nam = isset($_GET['user']);
echo $nam;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
 <fieldset> 
<form action="#" method="POST">
    <p>Order Date:<input type="date" name="date"></P>
    <p>Comapany:<input type="text" name="com"></p>
    <p>Owner:<input type="text" name="own"></p>
    <p>Item:<input type="text" name="item"></p>
    <p>Quantity:<input type="text" min="0" name="quant"></p>
    <p>Weight:<input type="number" min="0" name="weigh"></p>
    <p>Request Of shipment:<input type="text" name="req"></p>
    <p>Tracking ID:<input type="text" name="track"></p>
    <p>Shipment Size:<input size="" name="ship"></p>
    <p>Box Count:<input type="number" min="0" name="box"></p>
    <p>Specification:<input type="text" name="spec"></p>
    <p>Checklist Quantity:<input type="text" name="check"></p>
     <input type="submit" value="submit" name="submit" class="bt"> <input type="reset" class="bt">

     </form></fieldset>

</body>
</html>

<?php
   if(isset ($_POST['submit']))
   {
    $item = $_POST['item'];
    $quant = $_POST['quant'];
    $weigh = $_POST['weigh'];
    $box = $_POST['box'];

    $query = "insert into detail values('$item','$quant', '$weigh', '$box')";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        //echo"data inserted";

    }
    else{
        echo"failed";
    }
   }
   ?>
