<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    
    //Load Composer's autoloader
    require '../vendor/autoload.php';

    

    // dump($_POST);


    // $body_msg = "<p>Test</p>";



    function send_mail(){

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <p><b>Téléphone : </b>' . $_POST['phone'] . '<br>
        <p><b>Email : </b>' . $_POST['email'] . '<br> <br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $mail = new PHPMailer();


        try{
                //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.office365.com';               //Adresse IP ou DNS du serveur SMTP
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ad-dev@outlook.fr';                     //SMTP username
            $mail->Password   = 'Princeps0608';                               //SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->SMTPSecure = 'STARTTLS';            //Enable implicit TLS encryption
            // $mail->SMTPSecure= 'STARTTLS';               //Protocole de sécurisation des échanges avec le SMTP
            $mail->Port = 587;   

                //Recipients
            $mail->setFrom('ad-dev@outlook.fr', 'Dev');
            $mail->addAddress('anthony.diaz@esicad.org', 'Antho');     //Add a recipient


                //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Entry '.rand();
            $mail->WordWrap = 50; 			                   //Nombre de caracteres pour le retour a la ligne automatique
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->CharSet = 'UTF-8'; //Format d'encodage à utiliser pour les caractères

            $mail->send();

            echo 'Le message a été envoyé.'; 

        } catch (Exception $e){

            echo 'Erreur lors de l\'envoi du message.'; 

        }
    }
?>