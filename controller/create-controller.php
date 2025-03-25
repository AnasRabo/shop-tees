<?php
require_once('../config.php');


    $message = "";  /// on crée une variable vide.

    if(array_key_exists("quantity" , $_POST)&&  /// si "quantity" qui est dans POST contient une valeur.
       array_key_exists("product", $_POST)){    /// si "product" qui est dans POST contient une valeur.

        $product = $_POST["product"];   ///on crée une variable $product egale a  $_POST["product"].
        $quantity = $_POST["quantity"]; ///on crée une variable $product egale a  $_POST["quantity"].

        $message = "votre commande contient :   " . $quantity . " " . $product; /// on rapelle la variable $message et on lui donne un valeur qui contient des chaine de caractères et les deux variables.
       }

       require_once('../view/create-view.php');git add <div class="git cp"></div>