<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3><?php echo $message?></h3>
    <form method="POST"> <!-- on crée un forme avec une methode select pour pouvoir recupérer les infos du client . -->
        <select name="product"><!-- création d'un select qui contient 3 option .-->
            <option value="maillot-football">maillot football</option>
            <option value="maillot-rugby" selected>maillot rugby</option>
            <option value="maillot-hand-ball">maillot hand-ball</option>
        </select>
        <label><input name="quantity" type="number">quantity</label><!-- création d'un label de type number . -->
        <button type = "submit">envoyer !</button><!-- création d'un button de type "submit" . -->
           
    </form>
</body>
</html>