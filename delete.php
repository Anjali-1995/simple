<?php

include 'config.php';

$id = $_GET['id'];
echo $id;

$q = " DELETE FROM `info` WHERE `id` = $id ";

mysqli_query($con, $q);
 header('location:savedata1.php');

?>