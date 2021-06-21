<?php

require "dbcon.php";
$uname= $_POST["username"];
$pass= $_POST["password"];
$repass= $_POST["repassword"];
$mail= $_POST["email"];

if($uname=="" || $pass=="" || $repass==""|| $mail=="")
{
    echo '<script> alert("Empty Feild") </script>';
    require "login.php";
}
else if($pass!=$repass)
{
    echo '<script> alert("password doesnt match") </script>';
    require "login.php";
}
else if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
{
    echo '<script> alert("Invaild email") </script>';
    require "login.php";
}
else{

$sql="select * from login where name= '$uname'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($res)>=1)
{
    echo '<script> alert("username already taken") </script>';
    require "login.php";
}
else
{
    mysqli_query($con,"insert into login (name, password, email) values ('$uname', '$pass', '$mail')");
    echo '<script> alert("reg. success") </script>';
    require "login.php";


}
}
mysqli_close($con);

?>
