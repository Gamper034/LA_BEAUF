<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../vendor/PHPMailer/PHPMailer/src/Exception.php';
    require '../vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
    require '../vendor/PHPMailer/PHPMailer/src/SMTP.php';

    $body_msg = "<p>Test</p>";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.office365.com';               //Adresse IP ou DNS du serveur SMTP
    $mail->Port = 587;                          //Port TCP du serveur SMTP
    $mail->SMTPAuth = 1;                        //Utiliser l'identification

    if($mail->SMTPAuth){
        $mail->SMTPSecure = 'STARTTLS';               //Protocole de sécurisation des échanges avec le SMTP
        $mail->Username =  'ad-dev@outlook.fr';   //Adresse email à utiliser
        $mail->Password =  'Princeps0608';         //Mot de passe de l'adresse email à utiliser
    }

    $mail->CharSet = 'UTF-8'; //Format d'encodage à utiliser pour les caractères
    $mail->smtpConnect();

    $mail->From = 'ad-dev@outlook.fr';                //L'email à afficher pour l'envoi

    $mail->Subject = 'Mon sujet';                      //Le sujet du mail
    $mail->WordWrap = 50; 			                   //Nombre de caracteres pour le retour a la ligne automatique
    $mail->Body = $body_msg;
    $mail->AltBody = 'Mon message en texte brut'; 	       //Texte brut
    $mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut

    $mail->AddAddress('anthony.diaz@esicad.org');

    $mail->send();


    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else{
        echo 'Message bien envoyé';
    }

?>