<?php
unset($_SESSION['admin']);
session_destroy();

header("refresh:0.1;url=formlogin.html");
?>