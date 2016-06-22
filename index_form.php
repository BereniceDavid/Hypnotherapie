<?php

//formulaire du index.php

$errors =[];
$first = '';

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des problèmes.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

// Vérification et récupération des données du form de index.php

//Prénom
if(!array_key_exists('firstName', $_POST) || $_POST['firstName'] == ''){
	$errors['firstName'] = "Vous n'avez pas renseigné votre prénom";
}

//Nom
if(!array_key_exists('lastName', $_POST) || $_POST['lastName'] == ''){
	$errors['lastName'] = "Vous n'avez pas renseigné votre nom";
}

//Numéro de téléphone
if(!array_key_exists('phoneNumber', $_POST) || $_POST['phoneNumber'] == ''){
	$errors['phoneNumber'] = "Vous n'avez pas renseigné votre numéro de téléphone";
}

//email
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	$errors['email'] = "Vous n'avez pas renseigné un email valide";
}

//Message complémentaire
if(!array_key_exists('comment', $_POST) || $_POST['comment'] == ''){
	$errors['comment'] = "Vous n'avez pas renseigné de message";
}

//Première séance ou non d'hypnothérapie
if($_POST['firstSession'] == 'yes'){
	$first = 'oui';
} else {
	$first = 'non';
}


session_start();

if(!empty($errors)){
	$_SESSION['errors'] = $errors;
	$_SESSION['inputs'] = $_POST ;
	header('Location: index.php#indexForm');
} else { 
	$_SESSION['success'] = 1;
	$headers = 'FROM: '.$_POST['email'].$passage_ligne;
	$headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "Content-Transfer-Encoding: 8bit".$passage_ligne;

//		$headers .= "Content-Transfer-Encoding: 8bit";
//	
	//Code du mail reçu avec toutes les données rentrées par l'utilisateur
//	$message = "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
//	$message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
//	$message .= $passage_ligne;
	$message = '<html><body>';
	$message .= "Vous avez reçu une demande de contact provenant du site Éveil & Vous.</br></br>";
	$message .= "<strong>Prénom</strong></br>".$_POST['firstName']."</br></br>";
	$message .= "<strong>Nom</strong></br>".$_POST['lastName']."</br></br>";
	$message .= "<strong>Adresse</strong></br>".$_POST['adress']." ".$_POST['complementAdress']."</br></br>";
	$message .= "<strong>Ville</strong></br>".$_POST['postalCode']." ".$_POST['town']."</br></br>";
	$message .= "<strong>Email</strong></br>".$_POST['email']."</br></br>";
	$message .= "<strong>Téléphone</strong></br>".$_POST['phoneNumber']."</br></br>";
	$message .= "<strong>Le client a t'il déjà pratiqué une séance d'hypnothérapie</strong></br>".$first."</br></br>";
	$message .= "<strong>Commentaire du client</strong></br>".$_POST['comment'];
	$message .= '</body></html>';
	$message .= $passage_ligne;
	
	$message = utf8_decode($message);
	
//email de destination et objet du mail (formulaire de contact)
	mail('berenice.david@hetic.net', 'Formulaire de contact : Éveil & Vous', $message, $headers);
	
	//Lieu de retour après submit du formulaire
	header('Location: index.php#indexForm');	
}

?>