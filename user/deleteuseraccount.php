<?php 
include ("../db_connect.php");
$id=$_GET['uid'];
$query="delete from users where uid=$id";
mysqli_query($conn,$query);
echo"<h2>User Successfully Deleted!</h2>";
header("refresh:3;url=../index.php");
?>