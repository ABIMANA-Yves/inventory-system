<?php
include '../db.php';
session_start(); // Start the session
if(!$_SESSION['user']){
  echo "<script>window.location.href='../login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <?php
include 'menus.php'
    ?>
  <h1>INVERTORY MANAGEMENT SYSTEM</h1>
  <p>PRODUCT PAGE </p> 
</div>
  
<div class="container">
    <div class="row">
  <div class="col-md-4 bg-info p-3">
    <form action="products.php" method="post">
        <caption><h3 class="text-white">ADD PRODUCT</h3> </caption><br/>
      
        <input type="text" class="form-control" name="name" placeholder="Enter product name"><br/>
        <label for="">description</label>
        <textarea class="form-control" name="description" id=""></textarea>
   <button class="btn btn-success col-md-12 mt-3" type="submit" name='save'>save</button>
    </form>

 
  </div>
  <div class="col-md-8">
    <h3>list of products</h3>
    <table class="table">
        <tr class="bg-info text-white">
            <th>names</th> <th>description</th><th>action</th>
        
        </tr>
        <!-- <tr><td>Laptop</td><td>hp i5 cpu </td></tr>
        <tr><td>Laptop</td><td>hp i5 cpu </td></tr> -->
       

        <?php
         $result=mysqli_query($con,"select * from products");
        while($row=mysqli_fetch_array($result)){
            ?>
 <tr><td><?php echo $row['name'];  ?></td><td><?php echo $row['name'];  ?></td>
 <td><a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
 </td>
</tr>
            <?php

        }

        ?>
    </table>
 
 </div>
    </div>
   
</div>

</body>
</html>
<?php
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $description=$_POST['description'];

    mysqli_query($con,"insert into products values(null,'$name','$description')");
}






?>
