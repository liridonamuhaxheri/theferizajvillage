<?php 
include ("../db_connect.php");
session_start();
if (isset($_SESSION['admin'])){
$id=$_GET['bid'];
$query="delete from brands where bid=$id";
mysqli_query($conn,$query);
echo"<h2>Brand Successfully Deleted!</h2>";
header("refresh:1;url=formlogin.html");
}
else include('formlogin.php');
?>