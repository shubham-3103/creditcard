<?php
$servername="localhost";
$username="root";
$password="";
$database="creditcard";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
  echo "Connection was successful<br>";
}
$sql="SELECT CARD_BALANCE FROM student where LOGIN_ID=student.LOGIN_ID";
$result=mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num>0){
  $row=mysqli_fetch_assoc($result);
  $balance = $row['CARD_BALANCE'];
  
}

$sql1="SELECT SUM(transactions.AMOUNT) FROM transactions,student where student.CARD_NUMBER=transactions.CARD_NUMBER AND T_DATE BETWEEN '2022-04-01' AND '2022-04-31'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
echo implode("",$row1);
?>
