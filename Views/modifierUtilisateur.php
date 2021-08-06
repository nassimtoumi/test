<?php
	include "../controller/UtilisateurC.php";
	include_once '../Model/Utilisateur.php';
    session_start();
if ( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
    if ($_POST['password'] == $_POST['password2']) {
        

        $utilisateur = new Utilisateur($_SESSION['name'],$_POST['email'],$_POST['password']) ;
        $utilisateurC = new UtilisateurC();
        $utilisateurC->modifierUtilisateur($utilisateur,$_GET['id']);
        
        $_SESSION['email']=$_POST['email'];
        header('Location: Edit.php?erreur=0');
    }else {
        header('Location: Edit.php?erreur=1');
    }
    
    
}else {
    header('Location: Edit.php');
}
    

    ?>