<?php
  $server = "localhost";
  $username = 'root';
  $password = "";
  $dbname = 'trb';

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(!$conn){
  die("Could not connect to the database due to following error --> " .mysqli_connect_error());
 }
 ?>