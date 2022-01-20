<?php 
include("../db_connect.php");
$name=$_POST['uname'];
$lastname=$_POST['usurname'];
$email=$_POST['uemail'];
$password=$_POST['upassword'];
$phone=$_POST['uphone'];
$roadname=$_POST['aroadname'];
$zip=$_POST['apostalcode'];
$city=$_POST['acity'];
$housenum=$_POST['ahousenum'];
$comment=$_POST['Comment'];
$gender=$_POST['gender'];
$img=$_POST['uimage'];
$target_dir = "../images/user/";
    $image=$target_dir.$img; // used to store the filename in a variable

$query="insert into users values('NULL','$name','$lastname','$email','$phone','$password','$gender','$roadname','$housenum','$city','$comment','$image')";
mysqli_query($conn,$query);
echo"<h2>Registered Succesfully!</h2>";
include("formlogin.html");
?>