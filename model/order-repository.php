<?php

function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

function createOrder($product, $quantity) {
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];

	return $order;
}


function saveOrder($order) {
	$_SESSION["order"] = $order;
}