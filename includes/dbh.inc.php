<?php
  $servername="localhost";
  $dbUsername="phpmyadmin";
  $dbPassword="password";
  $dbName="loginsystemtut";
  $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
  if (! $conn){
    die("Connection Failed :".mysqli_connect_error());
  }
 ?>
