<?php
require '../config.php';
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username =htmlspecialchars($_POST['username']); 
    $password = htmlspecialchars($_POST['password']);
   // signin(usename,password)
   $sql="SELECT * FROM Utilisateur WHERE username=?";
   $db= config::getConnexion();
   $query= $db->prepare($sql);
   $query->execute([$username]);
   $signin = $query->fetchAll(PDO::FETCH_ASSOC);
//on a enregistrer dans $signin le user qui a $username comme saisi de la base de donnée
    if (count($signin) != 0) { //username existe
        foreach ($signin as $key ) {
                $user_password = $key['password'];
                $user_username = $key['username'];
                $user_id = $key['id'];
                $user_verified = $key['verified'];
                $user_email = $key['email'];



                
        }

        if ($user_password == $password) {
            $_SESSION['name']=$user_username;
            $_SESSION['id']=$user_id;
            $_SESSION['verified']=$user_verified;
            $_SESSION['email']=$user_email;
            header('Location: index.php');
        }else {
            header('Location: Signin.php?erreur=2');
        }


    }else {
        header('Location: Signin.php?erreur=1');
    }


}
else
{
   header('Location: index.php');
}
?>