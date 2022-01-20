<?php 
include("../db_connect.php");
$id=$_POST['uid'];
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

$query="update users set uname='$name',usurname='$lastname',uemail='$email',uphone='$phone',upassword='$password',gender='$gender',aroadname='$roadname',ahousenum='$housenum',acity='$city',Comment='$comment',uimage='$image' where uid=$id" ;
mysqli_query($conn,$query);
session_start();
include("profile.php");
?>