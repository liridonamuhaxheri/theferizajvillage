<?php
session_start();
if (isset($_SESSION['user']))
{
    include('formedit.php');
} 
else
{
    include('formlogin.html');
}
?>