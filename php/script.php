<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../vendor/autoload.php';


// if(isset($_REQUEST['action']) && $_REQUEST['action'] === "send_form"){


            $mail = new PHPMailer();

            $message = '<h1>Message envoyé depuis la page Contact</h1>
            <p><b>Nom : </b>' . $_POST['name'] . '<br>
            <p><b>Téléphone : </b>' . $_POST['phone'] . '<br>
            <p><b>Email : </b>' . $_POST['email'] . '<br> <br>
            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

            try{
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host = 'smtp.office365.com';               //Adresse IP ou DNS du serveur SMTP
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'ad-dev@outlook.fr';                     //SMTP username
                $mail->Password   = 'Princeps0608';                               //SMTP password
                $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
                $mail->Port = 587;   

                $mail->setFrom('ad-dev@outlook.fr', 'Dev');
                $mail->addAddress('anthony.diaz@esicad.org', 'Antho');     //Add a recipient

                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "Demande de la part de:".$_POST['name'];
                $mail->WordWrap = 50; 			                   //Nombre de caracteres pour le retour a la ligne automatique
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->CharSet = 'UTF-8'; //Format d'encodage à utiliser pour les caractères

                $mail->send();

                echo 'Le message a été envoyé.'; 

            } catch (Exception $e){

                echo 'Erreur lors de l\'envoi du message.'; 

            }
// }
?>