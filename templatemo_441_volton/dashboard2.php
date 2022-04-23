<?php
$servername="localhost";
$username="root";
$password="";
$database="creditcard";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";     
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];    
       
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard2.css">
    <meta http-equiv="refresh" content="5;url=" <?php echo $url ?>/>
    <title>Student Dashboard</title>
</head>
<body>
    
<div class="backgound">
    <div class="left"></div>
    <div class="right">
      <div class="strip-bottom"></div>
      <div class="strip-top"></div>
    </div>
  </div>
  <div class="center">
    <div class="card">
        <div class="front">
          <div class="strip-bottom"></div>
          <div class="strip-top"></div>
          
          <div class="investor">Card Number</div>
          
          <div class="card-number"> 
            <div class="section">
            <?php
              $name = parse_url($url, PHP_URL_QUERY);
              
              $sql3="select CARD_NUMBER from student where LOGIN_ID='$name'; ";
              $result3=mysqli_query($conn,$sql3);
              $row3=mysqli_fetch_assoc($result3);
              echo implode($row3);
              
            ?>  
            </div>
          </div>
          <div class="end"><span class="end-text">Balance Rem.:</span><span class="end-date"> 
            <?php 
            $sql="SELECT CARD_BALANCE FROM student where LOGIN_ID='$name'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            echo implode("",$row);
            ?> / 15000</span></div>
          
          <div class="card-holder">
            <?php 
              $sql2="SELECT USER_NAME FROM user,student WHERE user.LOGIN_ID='$name'";
              $result2=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($result2);
              echo implode("",$row2); 
            ?></div>
          <div class="roll_no">
            <?php 
              $sql4="select ROL_NO from student where LOGIN_ID='$name';";
              $result4=mysqli_query($conn,$sql4);
              echo implode("",mysqli_fetch_assoc($result4)); 
            ?>
          </div>

          <div class="monthly"> Total Amount Spent: <br> <?php
            $sql1="SELECT SUM(transactions.AMOUNT) FROM transactions,student where student.CARD_NUMBER=transactions.CARD_NUMBER AND student.LOGIN_ID='$name'";
            $result1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_assoc($result1);
            echo implode("",$row1);?></div>
          
        </div>
        
        <div class="front2">
            <div class="strip-bottom"></div>
            <div class="strip-top"></div>
            
            <div class="card-number"> 
              <div class="section">
                <div class="login_display">LOGIN ID:</div>  
                <?php 
                $sql5="SELECT LOGIN_ID FROM student WHERE LOGIN_ID='$name'";
                $result5=mysqli_query($conn,$sql5);
                echo implode(mysqli_fetch_assoc($result5)); 
                ?>
              </div>
            </div>
            
            <div class="user-role">
              ROLE:
              <?php 
                $sql6="SELECT USER_ROLE FROM student,user WHERE user.LOGIN_ID='$name'";
                $result6=mysqli_query($conn,$sql6);
                echo implode(mysqli_fetch_assoc($result6)); 
              ?> 
            </div>
            <div class="user-address">
              ADDRESS:<br>
              <?php 
                $sql7="SELECT USER_ADD FROM student,user WHERE user.LOGIN_ID='$name'";
                $result7=mysqli_query($conn,$sql7);
                echo implode(mysqli_fetch_assoc($result7)); 
              ?> 
            </div>
            <div class="user-phone">
              Mobile Number:<br>
              <?php 
                $sql7="SELECT USER_PHONE FROM student,user WHERE user.LOGIN_ID='$name'";
                $result7=mysqli_query($conn,$sql7);
                echo implode(mysqli_fetch_assoc($result7)); 
              ?>
            </div> 
          </div>
      </div>
      
  </div>
  <div class="user-table">
    <?php $url1='http://localhost/creditcard/Login_v18/Table/table.php?' . $name ?>
    <a href="<?php echo $url1 ?>" target="_blank"  >
        <button type="button" class="button_table" >Transaction History</button>
    </a>
    <?php 
      // $sql7="SELECT USER_PHONE FROM student,user WHERE user.LOGIN_ID='$name'";
      // $result7=mysqli_query($conn,$sql7);
      // echo implode(mysqli_fetch_assoc($result7)); 
    ?>
  </div> 
  <div><form action="logout.php">
        
        <button class="logout" ><b>Logout</b></button>
  </div></form>
</body>
</html>