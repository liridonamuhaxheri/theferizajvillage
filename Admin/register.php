<?php 
include("../db_connect.php");
session_start();
if (isset($_SESSION['admin']))
{
$name=$_POST['ename'];
$lastname=$_POST['esurname'];
$email=$_POST['eemail'];
$password=$_POST['password'];
$phone=$_POST['ephone'];
$role=$_POST['gender'];
$query="insert into employees values('NULL','$name','$lastname','$email','$password','$phone','$role');";
mysqli_query($conn,$query);
echo"<h2>Registered Succesfully!</h2>";
header("refresh:0.2;url=adminmanager.php");
}
include("account.php");
?>