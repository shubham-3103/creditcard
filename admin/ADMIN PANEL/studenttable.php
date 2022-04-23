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
	<title>All Students</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="studenttable.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						
						<thead>
							
							<tr class="table100-head">
							<?php
								$name = parse_url($url, PHP_URL_QUERY);	
            				?> 
								<th class="column1">Login_ID</th>
								<th class="column2">Student Name</th>
								<th class="column22">Roll Number</th>
								<th class="column3">Card Number</th>
								<th class="column4">Card Limit</th>
								<th class="column5">Card Balance</th>
								<th class="column6">User Address</th>
								<th class="column6">User Phone</th>
								<th class="column6">User Email</th>
								
							</tr>
						</thead>
						<tbody>
								<?php
									$name = parse_url($url, PHP_URL_QUERY);
									$sql="select * from user,student where student.LOGIN_ID=user.LOGIN_ID";
									
									$result=mysqli_query($conn,$sql);
								?>	
								<?php
									while($rows=mysqli_fetch_assoc($result))
									{
								?>		
										<tr class="item">
											<td><?php echo $rows['LOGIN_ID']; ?></td>	
											<td><?php echo $rows['USER_NAME']; ?></td>
											<td><?php echo $rows['ROL_NO']; ?></td>
											<td><?php echo $rows['CARD_NUMBER']; ?></td>
											<td><?php echo $rows['CARD_LIMIT']; ?></td>
											<td><?php echo $rows['CARD_BALANCE']; ?></td>
											<td><?php echo $rows['USER_ADD']; ?></td>
											<td><?php echo $rows['USER_PHONE']; ?></td>
											<td><?php echo $rows['USER_EMAIL']; ?></td>
										</tr>
									<?php
									}
									?>		
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>