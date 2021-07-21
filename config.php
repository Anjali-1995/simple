<?php

 $dbname="mnn3DuiWVG";
 $servername = "remotemysql.com";
 
  $username = "mnn3DuiWVG";
  $password = "QGUIlK3i0D";



// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
 if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
 }
//   echo "Connected successfully";
?>
