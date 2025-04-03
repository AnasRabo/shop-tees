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

require_once('../view/create-view.php');