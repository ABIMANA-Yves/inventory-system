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
  <title>stock</title>
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
  <p>STOCK PAGE </p> 
</div>
  
<div class="container">
    <div class="row">
  <div class="col-md-4 bg-info p-3">
    <form action="stock.php" method="post">
        <caption><h3 class="text-white">RECORD STOCK</h3> </caption><br/>

        <select name="product_id" id="" class="form-control">
            <!-- <option value="">laptop</option>
            <option value="">printer</option> -->
            <?php
         $result=mysqli_query($con,"select * from products");
        while($row=mysqli_fetch_array($result)){
            ?>
             <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
  <?php

        }

        ?>
        </select><br/>

        <select name="type" id="" class="form-control">
            <option value="in">stock in</option>
            <option value="out">stockout</option>
        </select><br/>
      
        <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity"><br/>
        
   <button class="btn btn-success col-md-12 mt-3" type="submit" name="save">save</button>
    </form>

 
  </div>
  <div class="col-md-8">
    <h3>stock status</h3>
    <table class="table">
        <tr class="bg-info text-white">
            <th>product name</th> <th>quantity</th><th>type</th>

        </tr>
       <?php
       $result=mysqli_query($con,"SELECT products.name,stock.quantity,stock.type
        FROM products,stock where products.id=stock.product_id");
       while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name'];  ?></td>
          <td><?php echo $row['quantity'];  ?></td>
          <td><?php echo $row['type'];  ?></td>
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
    $product_id=$_POST['product_id'];
    $type=$_POST['type']; 
    $quantity=$_POST['quantity']; 
    mysqli_query($con,"insert into stock values(null,'$product_id','$type','$quantity')");
}

?>
