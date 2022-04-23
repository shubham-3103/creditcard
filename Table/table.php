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
	<title>Transactions</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
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
								<th class="column2">TRANSACTION ID</th>
								<th class="column3">STORE ID</th>
								<th class="column4">TRANSACTION DATE</th>
								<th class="column5">AMOUNT</th>
								<th class="column6">CARD NUMBER</th>
							</tr>
						</thead>
						<tbody>
								
								<?php
									$name = parse_url($url, PHP_URL_QUERY);
									$sql="select transactions.TRANSACTION_ID,transactions.STORE_ID,transactions.T_DATE,transactions.AMOUNT,transactions.CARD_NUMBER from transactions ,student where student.LOGIN_ID= '$name' AND transactions.CARD_NUMBER=student.CARD_NUMBER ORDER BY transactions.T_DATE;";
									
									$result=mysqli_query($conn,$sql);
								?>	
								<?php
									while($rows=mysqli_fetch_assoc($result))
									{
								?>		
										<tr class="item">
											<td><?php echo $rows['TRANSACTION_ID']; ?></td>
											<td><?php echo $rows['STORE_ID']; ?></td>
											<td><?php echo $rows['T_DATE']; ?></td>
											<td><?php echo $rows['AMOUNT']; ?></td>
											<td><?php echo $rows['CARD_NUMBER']; ?></td>
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