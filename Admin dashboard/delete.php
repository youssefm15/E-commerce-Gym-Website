<?php
session_start();
include "../dbcon.php";
$sql ="Delete From login where id=$_GET[id]";
if (mysqli_query($con,$sql))
    header ("refresh:1; url=display.php");
else
    echo "Not deleted";
?>