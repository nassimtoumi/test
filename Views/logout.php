<?php
session_start();
if (isset($_SESSION['id'])) {
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['verified']);
//    echo 'deconnected';
}
header('Location: index.php');
?>