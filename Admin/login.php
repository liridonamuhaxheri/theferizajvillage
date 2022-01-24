<?php
session_start();
include ("../db_connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query="select * from  employees e JOIN role r ON e.role=r.rid where eemail='$email' and password='$password' ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
    $row=mysqli_fetch_object($result);
    $id=$row->eid;
    $_SESSION['admin']=$id;
    if ($row->role==1){
    include('adminmanager.php');
    }
    else if ($row->role==2)
    {
        include('admin.php');
    }
    else if($row->role==5)
    {
        include('shipper.php');
    }
    else 
    echo "<h2> Ju nuk keni autorizim per kyqjen ne administrate nese mendoni qe eshte nje gabim bisedoni me supervisor - in tuaj!</h2>"; 
}
else
{
    include ("formlogin.html");
    echo"<h2> Wrong email or password! </h2>";
}
?>