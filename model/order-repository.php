<?php


//SELECT * FROM order where user.id = $id
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

// vérifie que la commande a le droit d'être créée
// créé la commande
function createOrder($product, $quantity) {

	if ($quantity < 0) { /// si la condition n'est pas respercter alors returer la function false qui produira par la suite un message d'erreur.
		throw new Exception("Impossible de mettre une quantité inférieure à 0");
	} else if ($quantity > 3){ 
		throw new Exception("Impossible de mettre quantité supérieur à 3");
		
	} else { /// sinon si c'est respecter on recuper les valeurs du client.
		$order = [
			"product" => $product,
			"quantity" => $quantity,
			"*createdate" => new DateTime()
		];
	
		return $order;
	}
}


// INSERT INTO order values ($order['product'], $order['quantity'])
function saveOrder($order) {
	$_SESSION["order"] = $order;
}