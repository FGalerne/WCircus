<?php

// connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=sql-01.proxgroup.fr:3306; dbname=wcircusn_guestbook; charset=utf8', 'wcirc_empailleur', 'F18N01L11H25g');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

// Ecrire des messages dans la base de données

$requete=$bdd->prepare('INSERT INTO guestbook (pseudo, message, date_message) VALUES (?,?, NOW())');
$requete->execute(array($_POST['name'], $_POST['msg']));

// redirection du visiteur vers la page minichat

header('Location: index.php');

?>