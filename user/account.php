<?php
if (isset($_SESSION['user']))
{
    include('profile.php');
} 
else
{
    include('formlogin.html');
}
?>