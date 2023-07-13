<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>menu</title>
   
   <link rel="stylesheet" href="about.css">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

 <!--Header Section-->
<div class="menubar">
       
       <pre class="name"><span>Kiyuri</span> Cake Hub</pre>

       <ul>
           <li><a href="in.php">Home </a><i class="fa fa-home"></i></li>
           <li><a href="menu.php">Menu </a><i class="fa fa-birthday-cake"></i></li>
           <li><a href="about.php">About Us </a><i class="fa fa-users"></i></li>
           <li><a href="contact.php">Contact Us </a><i class="fa fa-phone"></i></li>
           <li><a href="register.php">Register </a><i class="fa fa-user"></i></li>
       </ul>
   
 </div> 
   <!--End of the Header Section-->



<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>RS.<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="buy.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Order </a>
               
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>
