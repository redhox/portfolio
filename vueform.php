<?php


$nom = $_POST['nom'];
$nom = htmlentities($nom);

$prenom = $_POST['prenom'];
$prenom = htmlentities($prenom);





$courriel = $_POST['email'];
$telephone = $_POST['telephone'];
$sujet = $_POST['categorie'];

		if ($sujet === '1'){
			$categorie = "Plus de renseignements";
		} 
		elseif ($sujet === '2'){
			$categorie = "Obtenir mon CV";
			$addAttachment = "./asset/fichier/CV_Morgan_Coulm.pdf";
		}
		elseif ($sujet === '3'){
			$categorie = "Autres";
		}
		else {
			$categorie = "Faites un choix";
        }
        
//$robot = $_POST['robot'];
	$message = stripslashes($_POST['message']);
	$message = str_replace("\n","<br/>",$message);
	$ban_chars = array("#","@","+","-","*","/","|","_","[","]","{","]","=","<",">");
	$message = str_replace($ban_chars,"", $message);
	$message = htmlentities($message);   
	$usage = "<em>Formulaire de contact &agrave; usage strictement personel. Aucune donn&eacute;e ou archive ne sera concerv&eacute;e sur le serveur.</em>";

/* image en base 64 */

	$logo_paper = "data:image/png;base64,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"; 

	$logo_mail ="data:image/png;base64,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
	";

?>