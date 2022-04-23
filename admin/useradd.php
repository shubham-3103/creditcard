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
    <title>New Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .next{
            position: absolute;
            top: 91%;
            left: 61.75%;
            padding: 0.4% 0.4% 0.4% 0.4%;
            border-radius: 25%;
            background: #1660b2;
            color:white;
            border: solid;
        }
        .input,.page-header,p{
            color: white;
        }
        .logout{
            position: absolute;
            top: 5.5%;
            left: 61%;
            padding: 0.4% 0.4% 0.4% 0.4%;
            border-radius: 15%;
            background: #1660b2;
            color:white;
            border: solid;
        }
    </style>
</head>
<body background="background.jpeg" >
    <!-- <img class="img1" src="background.jpeg" alt=""> -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>ADD NEW STUDENT</h2>
                    </div>
                    <p>Please fill this form and submit to add user record to the database.</p>
                    <form method="post" class = "input">
                    <?php
                        
                        if(isset($_POST['submit']))
                        {    
                            $login_id = $_POST['LOGIN_ID'];
                            $password = $_POST['PASSWORD'];
                            $userrole = $_POST['USER_ROLE'];
                            $username = $_POST['USER_NAME'];
                            $useradd = $_POST['USER_ADD'];
                            $userphone = $_POST['USER_PHONE'];
                            $useremail = $_POST['USER_EMAIL'];
                            $rollno = $_POST['ROL_NO'];
                            $cardnumber = $_POST['CARD_NUMBER'];
                            $cardlimit = $_POST['CARD_LIMIT'];
                            $cardbalance = $_POST['CARD_BALANCE'];
                            $sql = "INSERT INTO user (LOGIN_ID,PASSWORD,USER_ROLE,USER_NAME,USER_ADD,USER_PHONE,USER_EMAIL)
                            VALUES ('$login_id','$password','$userrole','$username','$useradd','$userphone','$useremail')";

                            $sql2 = "INSERT INTO student (ROL_NO,CARD_NUMBER,CARD_LIMIT,CARD_BALANCE,LOGIN_ID) VALUES ('$rollno','$cardnumber','$cardlimit','$cardbalance','$login_id')";
                            
                            if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql2)) {
                                echo "New record has been added successfully !";
                            }
                             else {
                                echo "Error: " . $sql . ":-" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    ?>
                        <div class="form-group">
                            <label>Login ID</label>
                            <input type="login_id" name="LOGIN_ID" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="PASSWORD" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Role</label>
                            <input type="userrole" name="USER_ROLE" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="username" name="USER_NAME" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Address</label>
                            <input type="useradd" name="USER_ADD" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Phone</label>
                            <input type="userphone" name="USER_PHONE" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>User Email</label>
                            <input type="useremail" name="USER_EMAIL" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Roll No.</label>
                            <input type="rollno" name="ROL_NO" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="cardnumber" name="CARD_NUMBER" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Card Limit</label>
                            <input type="cardlimit" name="CARD_LIMIT" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Card Balance</label>
                            <input type="cardbalance" name="CARD_BALANCE" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        
                    </form> 
                </div>
            </div>        
        </div>
        
        <div><form action="http://localhost/creditcard/Login_v18/HOMEPAGE/homepage.php">
        
        <button class="logout" ><b>Logout</b></button>
  </div></form>
    </div>
    
</body>
</html>