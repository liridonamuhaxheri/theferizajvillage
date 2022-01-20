<?php
session_start();
include("../db_connect.php");
$pid=$_GET['pid'];
$sid=session_id();

$query="insert into invoke values(NULL,$pid,'$sid')";
mysqli_query($conn,$query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>