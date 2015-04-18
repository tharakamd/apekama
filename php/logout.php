<?php 
session_start();
session_destroy();
header('location: /db/site/login.php');
?>