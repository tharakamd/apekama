<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('location: /db/site/login.php');
}
?>