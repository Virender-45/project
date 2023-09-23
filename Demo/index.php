<?php
$con = mysqli_connect("localhost", "root", "", "social");//Connection variable

if(mysqli_connect_errno()) 
{
    echo "Failed to connect" .  mysqli_connect_error();
}
$query = mysqli_query($con, "INSERT INTO test VALUES(NULL, VIRENDER)");

?>

<html>
<head>
    <title>MySite</title>
</head>
 <body>
hello user!
 </body>
</html>