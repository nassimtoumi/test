<?php
include "../controller/UtilisateurC.php";
$UtilisateurC = new UtilisateurC();
session_start();
if (isset($_GET['id'])) {
    if ($_GET['id'] == $_SESSION['id']) {
        $UtilisateurC->supprimerUtilisateur($_GET['id']);
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['verified']);
        unset($_SESSION['email']);
        header('Location:index.php');
    }
}else {
    header('Location:index.php');
}
//?>
?>

