<?php
include './db.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
  <div class="col-md-6 bg-info p-3 mt-5">
    <form action="login.php" method="post">
        <caption><h3 class="text-white">LOGIN FORM</h3> </caption><br/>

        

       
      
        <input type="email" name="email" class="form-control" placeholder="Enter Email"><br/>
        <input type="password" name="password" class="form-control" placeholder="***********"><br/>
        
        
   <button class="btn btn-success col-md-12 mt-3" type="submit" name="login">login</button>
   <a class="text-white" href="register.php">go to signup</a>
</form>

 
  </div>

    </div>
   
</div>

</body>
</html>
<?php
if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $result=mysqli_query($con,"select * from users where email='$email' 
    and password='$password'");

$count=mysqli_num_rows($result);
 
if($count==1){
  $_SESSION['user']=$email;
  echo "<script>window.location.href='./Dashboard/index.php'</script>";
}else{
  echo "<script>alert('incorect cridentios')</script>";
}
  }

?>
