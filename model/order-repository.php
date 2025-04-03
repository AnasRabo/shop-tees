<?php

function findOrderByUser() { /// creation d'une fontion qui check si des valeurs son inscrite.
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

function createOrder($product, $quantity) { /// creation d'une fontion qui crée une commande.
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];

	return $order;
}


function saveOrder($order) { /// function qui sauvegarde les informations. 
	$_SESSION["order"] = $order;
}