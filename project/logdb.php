<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="kiyuri";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

$u=$_POST['email'];
$p=$_POST['password'];


$sql="select * from register where email='$u' AND password='$p'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($u==" " &&$p==" "){
  
    
}

//sql Database
if ($row['email']=="admin" && $row['password']==$p) {
    echo '<script>window.location.href = "http://localhost/project/admin_page.php";</script>';
}
elseif($row['email']==$u && $row['password']==$p ){
    
  echo '<script>window.location.href = "http://localhost/project/in.php";</script>';


}

 else {
  
echo '<script>alert("Incorrect email or password. Please try again!");</script>';
echo '<script>window.location.href = "http://localhost/project/login.php";</script>';

}

$conn->close();





   






   
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";



?>