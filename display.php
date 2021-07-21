<?php

 include 'config.php';

 if(isset($_POST['done']))
 
 {

 $id = $_GET['id'];
 $username = $_POST['name'];
 $password = $_POST['email'];
 $q = " update `info` set id= $id, name ='$username', email ='$password' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:savedata1.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  .container{
      border: 2px solid white;

padding: 70px 25px 75px;
margin: auto;
width: 75%;
/* text-align: center; */
box-sizing: border-box;
overflow-x:auto;
    }
.align{
    border: 2px solid white;

padding: 70px 25px 75px;
margin: auto;
width: 75%;
/* text-align: center; */
box-sizing: border-box;
overflow-x:auto;
  text-align:center;
  margin-top:15px;
}
</style>
</head>
<body>
<?php include 'home.php' ?>

 <div class="col-lg-6 m-auto">
 <div class="container" >
 <h2 class="align" >UPDATE USER </h2>
   <form action="" method="POST">
    
     
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">NAME</label>
      <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">EMAIL</label>
      <input name="email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="enter email">
    </div>
    <div class="mb-3">
      <button type="submit" name='done' class="btn btn-primary">DONE</button>
    </div>
   
  </form>

  </div>




 
 
</body>
</html>