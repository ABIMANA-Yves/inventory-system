<?php
include '../db.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
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
  <p>REPORT PAGE</p> 
</div>
  
<div class="container">
    <div class="row">
 
  <div class="col-md-6">
    <h3>stock in report</h3>
    <table class="table">
        <tr class="bg-info text-white">
            <th>product name</th> <th>quantity</th>

        </tr>
        <?php
       $result=mysqli_query($con,"SELECT products.name,stock.quantity,stock.type
        FROM products,stock where products.id=stock.product_id and type='in'");
       while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name'];  ?></td>
          <td><?php echo $row['quantity'];  ?></td>
        
        </tr>
        <?php


       }

       ?>
    </table>
 
 </div>

 <div class="col-md-6">
    <h3>stock out report</h3>
    <table class="table">
        <tr class="bg-info text-white">
            <th>product name</th> <th>quantity</th>

        </tr>
        <?php
       $result=mysqli_query($con,"SELECT products.name,stock.quantity,stock.type
        FROM products,stock where products.id=stock.product_id and type='out'");
       while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name'];  ?></td>
          <td><?php echo $row['quantity'];  ?></td>
        
        </tr>
        <?php


       }

       ?>
    </table>
 
 </div>

 <div class="col-md-12">
    <h3>stock status in general</h3>
    <table class="table">
        <tr class="bg-info text-white">
            <th>product name</th> <th>total stock in</th><th>total stock out</th> <th>current in stock</th>

        </tr>
        <?php
       $result=mysqli_query($con,"SELECT 
    products.name,
    SUM(CASE WHEN stock.type = 'in' THEN stock.quantity ELSE 0 END) AS total_in,
    SUM(CASE WHEN stock.type = 'out' THEN stock.quantity ELSE 0 END) AS total_out
FROM products
INNER JOIN stock ON products.id = stock.product_id
GROUP BY products.name;");
       while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name'];  ?></td>
          <td><?php echo $row['total_in'];  ?></td>
          <td><?php echo $row['total_out'];  ?></td>
          <td><?php echo $row['total_in']-$row['total_out'];  ?></td>
        
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


<!-- SELECT 
    products.name,
    SUM(CASE WHEN stock.type = 'in' THEN stock.quantity ELSE 0 END) AS total_in,
    SUM(CASE WHEN stock.type = 'out' THEN stock.quantity ELSE 0 END) AS total_out
FROM products
INNER JOIN stock ON products.id = stock.product_id
GROUP BY products.name; -->
