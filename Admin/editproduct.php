<?php 
session_start();
include("../db_connect.php");
if (isset($_SESSION['admin'])){
    $id=$_POST['pid'];
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
$query="update products set category='$cid',pname='$name',pprice='$price',pprice1='$price1',pdescription='$description',bid='$bid',pinamge='$image',quantity='$quantity' where  pid=$id";
mysqli_query($conn,$query);
echo"<h2>Edited Succesfully!</h2>";
header("refresh:1;url=admin.php");
} else include('formlogin.html');
?>