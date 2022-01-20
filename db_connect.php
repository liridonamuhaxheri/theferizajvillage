<?php 
$host="localhost";
$user="root";
$pass="";
$db="theferizajvillage";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    echo "Error Conecting with Mysql server";
}
?>