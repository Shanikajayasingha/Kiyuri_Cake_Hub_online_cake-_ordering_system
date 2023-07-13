<?php

@include 'config.php';
$id = $_GET['edit'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="buydb.php" method="post" enctype="multipart/form-data">
      <h3 class="title">confirm your Order</h3>
      <input type="text" class="box" name="name" value="<?php echo $row['name']; ?>" readonly >
      <input type="text"  class="box" name="price" value="<?php echo 'RS. '.$row['price']; ?>" readonly>
      <input type="number" min="0"placeholder="quantity" name="qty" class="box" require>
      <input type="text"  class="box" name="Fname" placeholder="Enter your Name" >
      <input type="text"  class="box" name="address" placeholder="Enter your address" >
      <input type="text"  class="box" name="mobile" placeholder="Enter your Mobile Number" >

      <button type="Submit" class="btn">submit</button>
      <a href="menu.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>
   

   

</div>

</div>

</body>
</html>