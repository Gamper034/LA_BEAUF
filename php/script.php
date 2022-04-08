<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
// $name = $_POST["name"];
// $email = $_POST["email"];
// $phone = $_POST["phone"];
// $message = $_POST["message"];

// var_dump($_POST);
 
// $EmailTo = "ad-dev@outlook.fr";
// $Subject = "Test";
 
// // prepare email body text
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
 
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";

// $Body .= "Téléphone: ";
// $Body .= $phone;
// $Body .= "\n";
 
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";
 
// // send email
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// // redirect to success page
// if ($success){
//    echo "success";
// }else{
//     echo "invalid";
// }


//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$msg = "Nom:\t$nom\n";
$msg .= "E-Mail:\t$email\n";
$msg .= "Message:\t$message\n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "ad-dev@outlook.fr";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";
 
?>