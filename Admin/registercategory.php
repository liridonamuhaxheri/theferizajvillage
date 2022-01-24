<?php 
include("../db_connect.php");
session_start();
if (isset($_SESSION['admin']))
{
$name=$_POST['cname'];
$img=$_POST['image'];
$target_dir = "../images/category/";
    $image=$target_dir.$img; // used to store the filename in a variable
$query="insert into category values('NULL','$name','$image');";
mysqli_query($conn,$query);
echo"<h2>Registered Succesfully!</h2>";
header("refresh:0.2;url=admin.php");
}
include("account.php");
?>