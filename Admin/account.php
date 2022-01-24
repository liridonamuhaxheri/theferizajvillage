<?php
if (isset($_SESSION['admin']))
{
    $eid=$_SESSION["admin"];
    $query="select * from employees where eid=$eid"; 
    $elements=$conn->query($query);
    $user=mysqli_fetch_assoc($elements);
    if ($user['role']==1){
    include('adminmanager.php');
    }
    else if ($user['role']==2)
    {
        include('admin.php');
    }
    else if($user['role']==5)
    {
        include('shipper.php');
    }
    else 
    echo "<h2> Ju nuk keni autorizim per kyqjen ne administrate nese mendoni qe eshte nje gabim bisedoni me supervisor - in tuaj!</h2>";
} 
else
{
    include('formlogin.html');
}
?>