<?php
require_once('../config.php');


    $message = "";

    if(array_key_exists("quantity" , $_POST)&&
       array_key_exists("product", $_POST)){

        $product = $_POST["product"];
        $quantity = $_POST["quantity"];

        $message = "votre commande contient :   " . $quantity . " " . $product;
       }

       require_once('../view/create-view.php');