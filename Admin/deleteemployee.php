<?php 
include ("../db_connect.php");
session_start();
if (isset($_SESSION['admin'])){
$id=$_GET['eid'];
$query="delete from employees where eid=$id";
mysqli_query($conn,$query);
echo"<h2>Employee Successfully Deleted!</h2>";
header("refresh:1;url=formlogin.html");
}
else include('formlogin.php');
?>