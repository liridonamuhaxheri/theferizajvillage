<?php
session_start();
include ("../db_connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query="select * from users where uemail='$email' and upassword='$password' ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
    $row=mysqli_fetch_object($result);
    $id=$row->uid;
    $_SESSION['user']=$id;
    include('profile.php');
}
else
{
    echo"<h2> Wrong email or password! </h2>";
    include ("formlogin.html");
    
}
?>