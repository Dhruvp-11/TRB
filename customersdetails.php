<?php
  include 'config.php';

  if(isset($_POST['submit']))
  {
  	$from = $_GET['id']; //id from customer1.php
  	$to = $_POST['to'];
  	$amt = $_POST['amt'];
    $pin = $_POST['pn'];

  	$sql = "SELECT * from userdata where id = $from"; //sender
  	$que = mysqli_query($conn,$sql);
  	$sql1 = mysqli_fetch_array($que);
    $sqlp = "SELECT * from userdata where id = '$from' and pin = '$pin'";
    $rp=mysqli_query($conn,$sqlp);
    $count=mysqli_num_rows($rp);


  	$sql = "SELECT * from userdata where id = $to"; //receiver
  	$que = mysqli_query($conn,$sql);
  	$sql2 = mysqli_fetch_array($que);
     if($count>0)
     {
  	//check input of amount
  	   if(($amt)<0)
  	   {
  		     echo '<script type="text/javascript">';
  		     echo 'alert("Sorry! Negative values cannot be transferred")';
  		     echo '</script>';
  	   }

  	    else if($amt > $sql1['balance'])
  	    {
  		   echo '<script type="text/javascript">';
  		   echo 'alert("Insufficient Balance")';
  		   echo '</script>';
  	    }

  	    else if(($amt)==0)
  	    {
  		   echo '<script type="text/javascript">';
  		   echo 'alert("Zero value cannot be transferred")';
  		   echo '</script>';
  	    }



  	   else
  	   {
  		   $newbal = $sql1['balance'] - $amt;
  		   $sql = "UPDATE userdata set balance=$newbal where id=$from";
  		   mysqli_query($conn,$sql);

  		   $newbal = $sql2['balance'] + $amt;
  		   $sql = "UPDATE userdata set balance=$newbal where id=$to";
  		   mysqli_query($conn,$sql);

  		  $sender = $sql1['name'];
  		  $receiver = $sql2['name'];
  		  $sql = "INSERT INTO `transaction`(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amt')";
  		  $que=mysqli_query($conn,$sql);

  		  if($que)
  		  {
  			   echo '<script type="text/javascript">alert("Transaction Successful"); 
  			        window.location="customerslist.php";
  			      </script>';
  		  }
  		  $newbal=0;
  		  $amt=0;
       }
      }
      else
      {
        echo '<script type="text/javascript">alert("Invalid pin");
              </script>';
      }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<title>THE रAKSHAK BANK</title>
  	 <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
      <link rel="icon" href="images/logos.png" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="css/table.css">
  </head>
  <body class="bg">
  	<div class="sec">
  		<h2>TRANSACTION</h2>
  		<?php
  		  include 'config.php';
  		  $s = $_GET['id'];
  		  $sql = "SELECT * from userdata where id=$s";
  		  $result = mysqli_query($conn,$sql);
  		  if(!$result)
  		  {
  		  	   echo "Error : ".$sql."<br>".mysqli_error($conn);
  		  }
  		  $rows=mysqli_fetch_assoc($result);
  		?>
  		<form method="post" name="form1" class="form1"><br>
  			<div class="tb">
  				<table>
  					<tr>
  						<th>ID</th>
  						<th>NAME</th>
  						<th>E-MAIL</th>
  						<th>BALANCE</th>
  					</tr>

  					<tr>
  						<td><?php  echo $rows['id']?></td>
              <td><?php  echo $rows['name']?></td>
              <td><?php  echo $rows['email']?></td>
              <td><?php  echo $rows['balance']?></td>
  					</tr>
  				</table>
  			</div>
        <div class="tbl">
        <table class="tab">
          <tr><td>
  			<label>Transfer To :</label></td>
        <td>
  			<select name="to" required>
  				<option value="" disabled selected>Choose</option>
  				<?php
  				     include 'config1.php';
  		              $s = $_GET['id'];
  		              $sql = "SELECT * from userdata where id!=$s";
  		              $result = mysqli_query($conn,$sql);
  		             if(!$result)
  		              {
  		             	   echo "Error : ".$sql."<br>".mysqli_error($conn);
  		              }
  		             while($rows=mysqli_fetch_assoc($result)) 
  		             {
  		        ?>
  		        <option class="" value="<?php    echo $rows['id'];?>">
  		        	<?php    echo $rows['name'];?>
  		        </option>
  		        <?php
  		             }
  		        ?>   
  			</select>
        </td></tr>
  			<br><br>
        <tr><td> 
  			<label>Amount :</label></td>
        <td>
  			<input type="number" name="amt" placeholder="Enter Amount" required>
        </td></tr>
        <br><br>
        <tr><td>
        <label>Pin :</label></td>
        <td>
        <input type="number" name="pn" placeholder="4-digit" required>
        </td></tr>
        </table>
             <br><br>
               <div>
               	<button class="button1" name="submit" type="submit">Transfer</button>
               </div>
        </div>      
  		</form>
  	</div>	  
  </body>
  </html>