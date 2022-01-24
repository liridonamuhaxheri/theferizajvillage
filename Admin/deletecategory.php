<?php 
include ("../db_connect.php");
session_start();
if (isset($_SESSION['admin'])){
$id=$_GET['cid'];
$query="delete from category where cid=$id";
mysqli_query($conn,$query);
echo"<h2>Category Successfully Deleted!</h2>";
header("refresh:1;url=formlogin.html");
}
else include('formlogin.php');
?>