<?php
session_start();
if (!isset($_SESSION['uname'])) {
    echo 'session error';
    header('location: /db/site/login.php');
}
?>