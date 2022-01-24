<?php 
include ("../db_connect.php");
session_start();
if (isset($_SESSION['admin'])){
$id=$_GET['pid'];
$query="delete from products where pid=$id";
mysqli_query($conn,$query);
echo"<h2>Product Successfully Deleted!</h2>";
header("refresh:1;url=formlogin.html");
}
else include('formlogin.php');