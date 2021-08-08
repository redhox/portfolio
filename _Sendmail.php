<?php
// Importez les classes PHPMailer dans l'espace de noms global 
// Celles-ci doivent &ecirc;tre en haut de votre script, pas &agrave; l'int&eacute;rieur d'une fonction
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '_PHPMailer/src/Exception.php';
require '_PHPMailer/src/PHPMailer.php';
require '_PHPMailer/src/SMTP.php';
require 'vueform.php'; 
require './sdjf/zty/nnbvszf.php';
require 'email_form.php'; 
require 'email_confirm.php';




$mail = new PHPMailer(true);                              // Passer `true` active les exceptions
try {
    // Param&egrave;tres du serveur
    $mail->SMTPDebug = 0;                                 // Activer la sortie de d&eacute;bogage d&eacute;taill&eacute; Mettre &agrave; 0 en prod Mettre &agrave; 2 en dev
    $mail->isSMTP();                                      // Configurez mailer pour utiliser SMTP
    $mail->Host = 'smtp.gmail.com';  					  // Sp&eacute;cifiez les serveurs SMTP principaux et de sauvegarde
    $mail->SMTPAuth = true;                               // Activer l'authentification SMTP
    $mail->Username = $moi;                               // Nom d'utilisateur SMTP
    $mail->Password = $pomme;                             // Mot de passe SMTP
    $mail->SMTPSecure = 'ssl';                            // Activer le cryptage TLS, `ssl` a &eacute;galement accept&eacute;
    $mail->Port = 465;                                    // Port TCP auquel se connecter

    // Destinataires
    $mail->setFrom($moi, $moi2);
    //$mail->addAddress('', '');     // Ajouter un destinataire
    $mail->addAddress($courriel, $nom." ".$prenom);               // Le nom est facultatif
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');						// Copie carbonne
    $mail->addBCC($moi);					// Copie carbonne cach&eacute;e

    // Pi&egrave;ces jointes
	if(isset($addAttachment)){
		$mail->addAttachment($addAttachment);
	}
	else{
		//Je n'affiche rien
	}
	
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Ajouter des pi&egrave;ces jointes avec le chemin complet
    //$mail->addAttachment('./images/paper.png', 'paperimg'); 
    //$mail->addAttachment('mail.jpg', 'mail.jpg');    // Ajouter des pi&egrave;ces jointes avec le chemin complet avec un nom (Nom facultatif)

    // Contenu
    $mail->isHTML(true);                                  // D&eacute;finissez le format de l'e-mail sur HTML
    $mail->Subject = $categorie;
    $mail->Body    = $m_send;
    // $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML';

    $mail->send();
    echo ''.$m_confim.'';
} catch (Exception $e) {
    echo 'Le message n\'a pas pu &ecirc;tre envoy&eacute;. <BR>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>