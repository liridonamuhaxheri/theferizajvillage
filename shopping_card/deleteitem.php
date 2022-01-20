
<?php
session_start();
include("../db_connect.php");
$iid=$_GET['iid'];

$query="delete from invoke where iid=$iid";
mysqli_query($conn,$query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>