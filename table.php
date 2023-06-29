<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = "table table-bordered table-striped table-hover" style="margin:10px 15%;" bordered="5px";>
    <tr style="background-color:lightgreen">
    <th>Item/Customer</th><th>Customer1</th><th>Customer2</th><th>Total</th>
</tr>
<?php
 include("connection.php");
 $query="select * from detail";
 $result= mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($result))
 {
    echo "<tr style='background-color:pink; height:25px;'>";
    echo "<td>".$row["Item/Customer"]."</td>";
    echo "<td>".$row["Customer1"]."</td>";
    echo "<td>".$row["Customer2"]."</td>";
    echo "<td>".$row["Total"]."</td>";
    //echo "<td><a href='update.php?id=$row[Item/Customer]'>update</a></td">;
    //echo "<td><a href='delete.php?id=$row[Item/Customer]'>delete</a></td">;
    echo "</tr>";
}
 ?>
 </table>
</body>
</html>
