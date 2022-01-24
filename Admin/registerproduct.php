<?php 
include("../db_connect.php");
$name=$_POST['pname'];
$cid=$_POST['pcategory'];
$bid=$_POST['pbrand'];
$quantity=$_POST['quantity'];
$price=$_POST['pprice'];
$price1=$_POST['pprice1'];
$description=$_POST['description'];
$img=$_POST['pimage'];
$target_dir = "../images/products/";
    $image=$target_dir.$img; // used to store the filename in a variable

$query="insert into products values('NULL','$cid','$name','$price','$price1','$description','$bid','$image','$quantity')";
mysqli_query($conn,$query);
echo"<h2>Registered Succesfully!</h2>";
include("formlogin.html");?>