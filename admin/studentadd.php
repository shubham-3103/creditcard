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
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        /* .input,.page-header,p{
            color: white;
        } */
        
    </style>
</head>
<body background="background.jpeg" >
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form method="post" class="input">
                    <?php
                        
                        if(isset($_POST['submit']))
                        {    
                            $rollno = $_POST['ROL_NO'];
                            $cardnumber = $_POST['CARD_NUMBER'];
                            $cardlimit = $_POST['CARD_LIMIT'];
                            $cardbalance = $_POST['CARD_BALANCE'];
                            $loginid = $_POST['LOGIN_ID'];
                            $sql = "INSERT INTO student (ROL_NO,CARD_NUMBER,CARD_LIMIT,CARD_BALANCE,LOGIN_ID)
                            VALUES ('$rollno','$cardnumber','$cardlimit','$cardbalance','$loginid')";
                            if (mysqli_query($conn, $sql)) {
                                echo "New record has been added successfully !";
                            } else {
                                echo "Error: " . $sql . ":-" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    ?>
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
                        <div class="form-group">
                            <label>Login ID</label>
                            <input type="loginid" name="LOGIN_ID" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                    
                </div>
                
            </div> 
                   
        </div>
        
    </div>
</body>
</html>