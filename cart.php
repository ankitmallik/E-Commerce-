<?php
session_start();
include('config.php');
$_SESSION['user_id'];
echo $_SESSION['user_id'];
if(isset($_GET['id']) && isset($_SESSION['user_id']))
{
   $user_id = $_SESSION['user_id'];
   $product_id = $_GET['id'];

   $sql = "INSERT INTO cart(user_id,product_id)VALUES('$user_id','$product_id')";
   $result = mysqli_query($conn,$sql);
   if($result)
   {
header('location:index.php');
   }

}