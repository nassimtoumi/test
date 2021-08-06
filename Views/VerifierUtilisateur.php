<?php
require '../Controller/UtilisateurC.php';
session_start();

if (isset($_GET['id'])) {
    $Utilisateur = new UtilisateurC();
    $Utilisateur->verifierUtilisateur($_GET['id']);
    echo 'verified';
    $_SESSION['verified']=1;
}
header('Location: index.php');

?>