<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'creditcard');

$name = $_POST['rollno'];
$pass = $_POST['pass'];

$s = "select * from user where LOGIN_ID='$name'&& PASSWORD='$pass'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){
    header("location:http://localhost/creditcard/Login_v18/templatemo_441_volton/dashboard2.php?" . $name );
}
else{
    header("location:http://localhost/creditcard/Login_v18/index.php?");
}
?>

