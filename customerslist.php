<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/table.css">
     <link rel="icon" href="images/logos.png" type="image/x-icon"> <!-- for icon -->
	  <title>All Customers</title>
    <?php include 'config.php' ?>
</head>
<body class="bg">
	<header>
	 <div>
		<h1>THE <span>र</span>AKSHA<span>K</span> BANK</h1>
	 </div>
    </header>
    <section>
    	<div class="sec">
    		<h2> ALL CUSTOMERS</h2>	

        <div class="tb">
            <table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>E-MAIL</th>
                    <th>BALANCE</th>
                    <th>OPERATION</th>
                </tr>

                  <?php
                    include ("config.php");
                    $sql = "SELECT * FROM userdata";
                    $result= mysqli_query($conn,$sql);
                    if(!$result)
                    {
                      echo "Error : ".$sql."<br>".mysqli_error($result);
                    }
                  ?>
                    <?php
                     while($rows= mysqli_fetch_assoc($result)){ 
                    ?>
                          <tr>
                            <td><?php echo $rows['id']?></td>
                            <td><?php echo $rows['name']?></td>
                            <td><?php echo $rows['email']?></td>
                            <td><?php echo $rows['balance']?></td>
                            <td><a href="customersdetails.php?id= <?php echo $rows['id'] ;?>"> <button class="button1">Select</button></a></td> <!-- for selection of user-->
                          </tr>
                        
                  <?php
                      }
                  ?>
            </table>
    </section>  

</body>
</html>