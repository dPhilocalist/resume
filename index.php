<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    .log{
        background-color:black;
        color:white;
        text-align:center;
        border:10px;
        border-color:white;
        height=180px;
        width=500px;

    }
    .but{
        background-color:white;
        color:black;
        
    }
    body{
        background-color:black;
    }
    </style>
<body>

    <form  action="loginpost.php" method="GET">
    <div class="log">
     <p><b>USERID*:</b><input type="text"  name="user" required ></p> 
     <p><b>Password*:</b><input type="password" placeholder="Enter a password"  name="password" required></p>

     <input type="submit" value="sigin" class="but"><input type="reset" class="but">
</div>
</form>

</body>
</html>


