<?php
require_once('../config.php');
require_once('../model/product-repository.php');
require_once('../model/order-repository.php');

session_start(); ///Démarre une nouvelle session ou reprend une session existante

$message = "";  /// on cree une variable qui vas contenir un message d'erreur.
if (array_key_exists("quantity", $_POST) && /// on verifie si une clé quantity existe.
	array_key_exists("product", $_POST)){   /// on verifie si une clé product existe.
	$order = createOrder($_POST['product'], $_POST['quantity']);
	if ($order) {
		saveOrder($order); /// on verifie si la commande deja enregister respecte la condition.
	} else {
		$message = "impossible de créer la commande";   /// si ce n'est pas le cas alors on affiche un message d'erreur.
	}

}

$orderByUser = findOrderByUser();
require_once('../view/create-view.php');

// le controleur :

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer les données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view