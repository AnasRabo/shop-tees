<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Prenez votre commande !</h3>
    <form method="POST"> <!-- on crée un forme avec une methode select pour pouvoir recupérer les infos du client . -->
    <label>Quantity <input name="quantity" type="number"></label><!-- création d'un label de type number . -->
        <select name="product"><!-- création d'un select qui contient 3 option .-->
            <?php foreach ($products as $product) { ?>
			    <option value="<?php echo $product; ?>"><?php echo $product; ?></option>
			<?php } ?>         
        </select>  
            <button type = "submit">envoyer !</button><!-- création d'un button de type "submit" . -->
        <?php if (array_key_exists("order", $_SESSION)){ ?> <!-- Boucle : si les valeurs sont inscrite (si une commande existe deja) alors...  -->
		    <p>Vous avez une commande en attente : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?></p>
	    <?php } ?> <!-- on affiche un message p et on incremente la valeurs de "quantity" et "product" du client-->
        <p><?php $message ?></p>
    </form>
</body>
</html>