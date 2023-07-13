<?php

@include 'config.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('location:admin_page.php');
 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   </title>

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
          
           
           <li><a href="admin_page.php">Add Items</a><i class="fa fa-user"></i></li>
       </ul>
   
 </div> 
   <!--End of the Header Section-->
<h1>INVOICE TABLE</h1>
   
<div class="container">

   <?php

   $select = mysqli_query($conn, "SELECT * FROM oder_table");
   
   ?>
   <div class="product-display">
      <table boeder="5" class="product-display-table">
         <th>
         <tr>
            <th>invoice No</th>
            <th>CAKE</th>
            <th>Price</th>
            <th>quantity</th>
            <th>coustomer</th>
            <th>location</th>
            <th>Mobile</th>
            a
         </tr>
         </th>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Item']; ?></td>
            <td>RS.<?php echo $row['price_RS']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['customer']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['Contact_No']; ?></td>

         </tr>
      <?php } ?>
      </table>
   </div>

</div>
</body>
</html>