<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    .container{
      border: 2px solid white;

padding: 70px 25px 75px;
margin: auto;
width: 55%;

box-sizing: border-box;
/* overflow-x:auto; */
    }
    </style>
    <body>
        <?php include 'home.php' ?>
        <div class="container">
        <table width=100% border='3'  >
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>delete</th>

<th>update</th>
</tr>

    

<?php
error_reporting(0);

include('config.php');
 if(isset($_POST['done']))
 {

 $name=$_POST['name'];
 $email=$_POST['email'];


  $query="INSERT INTO `info` ( `name`, `email`) VALUES (  '$name', '$email')";
  $sql=mysqli_query($con,$query) or die (mysqli_error($con));
 }


 


$query="SELECT * FROM `info`  ";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
//echo "$total";
// $result = mysqli_query($con,"SELECT * FROM contact");

// echo "<table border='3' >
// <tr>
// <th>ID</th>
// <th>NAME</th>
// <th>EMAIL</th>
// <th>delete</th>

// <th>upate</th>



// </tr>";




 while($row = mysqli_fetch_assoc($data))
{
echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" ?>  <button class="btn-success btn"> <a href="display.php?id=<?php echo $row['id']; ?>" class="text-white"> update</a>  </button> <?php "</td>";

 echo "<td>" ?>  <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button> <?php "</td>";

echo "</tr>";
}
echo "</table>";


mysqli_close($con);

?> 
</div>
  </body>   
</html>