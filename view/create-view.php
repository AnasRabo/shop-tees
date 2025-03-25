<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3><?php echo $message?></h3>
    <form method="POST">
        <select name="product">
            <option value="">maillot football</option>
            <option value="second" selected>maillot rugby</option>
            <option value="third">maillot hand-ball</option>
        </select>
        <label><input name="quantity" type="number">quantity</label>
        <button type = "submit">envoyer !</button>
           
    </form>
</body>
</html>