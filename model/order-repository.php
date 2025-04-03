<?php

function findOrderByUser() { /// creation d'une fontion qui check si des valeurs son inscrite.
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

function createOrder($product, $quantity) {

	if ($quantity < 0 || $quantity > 3) { /// condition qui cree une erreur si la quantité est pas respecter.
		return false; /// si la condition n'est pas respercter alors returer la function false qui produira par la suite un message d'erreur.
	} else { /// sinon si c'est respecter on recuper les valeurs du client.
		$order = [
			"product" => $product, 
			"quantity" => $quantity
		];
	
		return $order;
	}
}


function saveOrder($order) { /// function qui sauvegarde les informations. 
	$_SESSION["order"] = $order;
}
