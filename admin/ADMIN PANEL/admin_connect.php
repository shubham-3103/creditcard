<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'creditcard');

$name = $_POST['rollno'];
$pass = $_POST['pass'];

$s = "SELECT * FROM user,admin WHERE '$name'=admin.LOGIN_ID AND '$name'=user.LOGIN_ID AND '$pass'=user.PASSWORD";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){
    header("location:http://localhost/creditcard/Login_v18/admin/ADMIN%20PANEL/admin_dashboard.php?" . $name );
}
else{
    header("location:http://localhost/creditcard/Login_v18/admin/admin.php?");
}
?>

