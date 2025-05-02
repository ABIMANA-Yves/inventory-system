<?php

session_start(); // Start the session
if(!$_SESSION['user']){
  echo "<script>window.location.href='../login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <style>
  .custom-jumbotron {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
</style>
<html>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <div class="jumbotron text-center custom-jumbotron">
  <!-- <h1 style="font-size: 1.5rem;">INVENTORY MANAGEMENT SYSTEM</h1>
<p style="margin-bottom: 0.5rem;">manage inventory in better way!</p> -->

  
<div class="col-md-12 mt-4">
<img src=""  class="img-fluid rounded">
</div> 
</head>
<body>

<div class="jumbotron text-center">
    <?php
include 'menus.php'
    ?>
  <h1>INVERTORY MANAGEMENT SYSTEM</h1>
  <p>manage invertory in botter way ! </p> 
  <p> Welcame <?php echo  $_SESSION['user'];  ?></p>
</div>
<br>
<div class="container">
    <div class="row">
  <div class="col-md-12">
  <img src="./baner.jpg" alt="" style="width:100%">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis

  <div class="container">
  <div class="row">
  <div class="col-md-12 mt-4">
  <style>
  .small-inventory-img {
    max-height: 300px;
    object-fit: cover;
    width: 100%;
  }
</style>

  <!-- <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68" 
     alt="Inventory Management Dashboard" 
     class="img-fluid rounded"  -->
     <!-- style="min-height: 30%; object-full: cover;"> -->
     <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68" alt="Inventory Management Dashboard" class="img-fluid rounded small-inventory-img">
  <div class="jumbotron text-center">
  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.Lorem 
   ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit
  sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit.
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est distinctio fuga ducimus veritatis
  vitae temporibus itaque, voluptates praesentium error ipsum velit suscipit ullam quos porro ab harum corrupti illum impedit..</p>
</div>
<footer class="bg-dark text-white py-4 mt-5">
  <div class="container">
    <div class="row">
      
      <!-- Left Side: Logo, Copyright, Social -->
      <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
        <p class="mb-2">© 2025 Inventory Management System</p>
        <div>
          <a href="https://facebook.com" target="_blank" class="text-white mx-2">
            <i class="fab fa-facebook fa-lg"></i>
          </a>
          <a href="https://instagram.com" target="_blank" class="text-white mx-2">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a href="https://twitter.com" target="_blank" class="text-white mx-2">
            <i class="fab fa-twitter fa-lg"></i>
          </a>
          <a href="https://youtube.com" target="_blank" class="text-white mx-2">
            <i class="fab fa-youtube fa-lg"></i>
          </a>
          <a href="https://wa.me/1234567890" target="_blank" class="text-white mx-2">
            <i class="fab fa-whatsapp fa-lg"></i>
          </a>
        </div>
      </div>

      <!-- Right Side: Contact and Location -->
      <div class="col-md-6 text-center text-md-right">
        <p class="mb-1">
          <i class="fas fa-envelope me-2"></i> contact@inventorysystem.com
        </p>
        <p class="mb-1">
          <i class="fas fa-phone me-2"></i> +1 234 567 890
        </p>
        <p>
          <i class="fas fa-map-marker-alt me-2"></i> 123 Warehouse Street, Business City
        </p>
      </div>

    </div>
  </div>
</footer>



    </div>
  </div>
</div>

 
  </div>
    </div>
   
</div>


</body>
</html>
