 <?php
session_start();
    include("../connection.php");
    include("../checklogin.php");
    $user_data = check_login($db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">First Name</th>
								<th class="column2">Last Name</th>
								<th class="column3">Email</th>
								<th class="column4">Phone</th>
								<th class="column5">CNIC</th>
								<th class="column6">Gender</th>
								<th class="column7">token</th>
							</tr>
						</thead>
						<tbody>
							<?php

include '../connection.php';

$selectquery = "select * from registration";
$query = mysqli_query($db,$selectquery);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
	?>

								<tr>
									<td class="column1"><?php echo $res['fname']; ?></td>
									<td class="column2"><?php echo $res['lname']; ?></td>
									<td class="column3"><?php echo $res['email']; ?></td>
									<td class="column4"><?php echo $res['phone']; ?></td>
									<td class="column5"><?php echo $res['cnic']; ?></td>
									<td class="column6"><?php echo $res['gender']; ?></td>
									<td class="column7"><?php echo $res['token']; ?></td>
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