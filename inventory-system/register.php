<?php
include './db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>signup</title>
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
    <form action="register.php" method="post">
        <caption><h3 class="text-white">SIGNUP FORM</h3> </caption><br/>

        

       
        <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname"><br/>
        <input type="text" name="lastname" class="form-control" placeholder="Enter lastname"><br/>
        <input type="email" name="email" class="form-control" placeholder="Enter Email"><br/>
        <input type="password" name="password" class="form-control" placeholder="***********"><br/>
        
        
   <button class="btn btn-success col-md-12 mt-3" type="submit" name='save'>Signup</button>
   <a class="text-white" href="login.php">go to login</a>
</form>

 
  </div>

    </div>
   
</div>

</body>
</html>
<?php
if(isset($_POST['save'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];


   $ok= mysqli_query($con,"insert into users values(null,'$firstname','$lastname','$email','$password')");
if($ok){
  echo "<script>alert('done ! now you can login')</script>";
}
  }

?>
