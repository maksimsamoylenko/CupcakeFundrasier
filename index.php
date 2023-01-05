<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake fundraiser</title>
</head>
<body>

<h1> Cupcake Choices...</h1>
<form method="post" action="confirm.php">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" >

    <label><input type="checkbox" value="grasshopper" name="flavor[]">The Grasshopper</label>
    <label><input type="checkbox" value="whiskey" name="flavor[]">Whiskey Maple Bacon</label>
    <label><input type="checkbox" value="carrotwalnut" name="flavor[]">Carrot Walnut</label>
    <label><input type="checkbox" value="saltedcaramel" name="flavor[]">Salted Caramel Cupcake</label>
    <label><input type="checkbox" value="redvelvet" name="flavor[]">Red Velvet</label>
    <label><input type="checkbox" value="lemondrop" name="flavor[]">Lemon Drop</label>
    <label><input type="checkbox" value="tiramisu" name="flavor[]">Tiramisu</label>
    <input type="submit" value="Submit">
</form>

</body>
</html>