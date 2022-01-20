<?php
unset($_SESSION['user']);
session_destroy();

echo "<h3>You have been signed out </h3>";
header("refresh:0.1;url=../index.php");
?>