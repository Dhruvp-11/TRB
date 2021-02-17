<!DOCTYPE html>
<html lang="en">
<head>
	<title>THE रAKSHAK BANK</title>
	 <link rel="stylesheet" type="text/css" href="css/table.css">
	 <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="icon" href="images/logos.png" type="image/x-icon">
</head>
<body class="bg">
	<div class="sec">
		<h2>TRANSACTION HISTORY</h2>
	</div>
	<div class="tb">
		<table>
			<tr>
				<th>Sr. No.</th>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
				<th>Date & Time</th>
			</tr>
			<?php
			  include 'config.php';
			  $sql = "select * from transaction";
			  $que = mysqli_query($conn,$sql);
			  while($rows=mysqli_fetch_assoc($que)) 
			  {
			?>
			<tr>
				 <td><?php echo $rows['sno']?></td>
                 <td><?php echo $rows['sender']?></td>
                 <td><?php echo $rows['receiver']?></td>
                 <td><?php echo $rows['balance']?></td>
                 <td><?php echo $rows['datetime']?></td>
			</tr>
			<?php
			  }
			?>
		</table>
	</div>
</body>
</html>