<?php 
include("../db_connect.php");
session_start();
if (isset($_SESSION['admin'])){
$id=$_POST['eid'];
$name=$_POST['ename'];
$lastname=$_POST['esurname'];
$email=$_POST['eemail'];
$password=$_POST['password'];
$phone=$_POST['ephone'];
$role=$_POST['gender'];
$query="update employees set ename='$name',esurname='$lastname',eemail='$email',password='$password',ephone='$phone',role='$role' where eid=$id" ;
mysqli_query($conn,$query);
echo"<h2>Edited Succesfully!</h2>";
header("refresh:0.2;url=adminmanager.php");
}include("formlogin.html");
?>