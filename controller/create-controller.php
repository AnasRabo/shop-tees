<?php
require_once('../config.php');
require_once('../model/product-repository.php');
require_once('../model/order-repository.php');

session_start(); ///Démarre une nouvelle session ou reprend une session existante

if(array_key_exists("quantity" , $_POST)&&  /// si "quantity" qui est dans POST contient une valeur.
    array_key_exists("product", $_POST)){   /// si "product" qui est dans POST contient une valeur.

        $order = createOrder($_POST['product'], $_POST['quantity']);
        saveOrder($order);
}

$order = findOrderByUser(); /// appelle d'une fonction et stocke le résultat dans une variable.
require_once('../view/create-view.php');

// le controleur : 

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer les données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view