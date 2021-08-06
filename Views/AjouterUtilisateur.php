<?php
require '../Model/Utilisateur.php';
require '../Controller/UtilisateurC.php';
//require '../config.php';
session_start();

$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['password'];
$user =  new Utilisateur($username,$email,$password);
$Utilisateur = new UtilisateurC();
    $sql="SELECT * FROM Utilisateur WHERE username=:username OR email=:email";
    $db= config::getConnexion();
    $query= $db->prepare($sql);
    $query->execute([
        'username' => $username,
		'email' => $email
    ]);
    $account = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($account)!=0) {
    header('Location: Signup.php?erreur=1');
}else {
   

$Utilisateur->ajouterUtilisateur($user);
$_SESSION['username']=$username;
$_SESSION['email']=$email;
//---------------------sending mail---------------//

require '../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sporthub.service@gmail.com';                 // SMTP username
$mail->Password = 'Sporthub123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('noreply@sporthub.com', 'no-reply');
$mail->addAddress($email, $username);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);   
$sqlid = "SELECT * from Utilisateur where email=:email"; 
            $db = config::getConnexion();
            $queryid  = $db->prepare($sqlid);
            $queryid->execute([
                'email' => $email,
            ]); 
            $id = $queryid->fetch();   
$link= 'localhost/projet/Views/VerifierUtilisateur.php?id='.$id['id'];
$mail->Subject = 'Confirmation mail';
$mail->Body = 'Hi,<br>
               Thank you for creating a SportHub account . please verify your email address '.$email.' to complete the registration process<br><br>
               <a href="'.$link.'">click here to verify</a><br><br>
               this message was sent from an unmonitored address . Please do not reply to this address.<br><br>Best regards,<br>the SportHub Team';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
//---------------------end sending mail -----------//


header('Location: index.php');
}
?>