<?php 
session_start();
include("../db_connect.php");
if (isset($_SESSION['admin'])){
$id=$_POST['cid'];
$name=$_POST['name'];
$img=$_POST['image'];
$target_dir = "../images/products/";
$image=$target_dir.$img; // used to store the filename in a variable
$query="update category set cname='$name',image='$image'  where cid=$id" ;
mysqli_query($conn,$query);
echo"<h2>Edited Succesfully!</h2>";
header("refresh:1;url=admin.php");
} else include('formlogin.html');
?>