<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$flavor = $_POST['flavor'];

if (isset($flavor)){
    echo "<h1>Thank you, " . $_POST['name'] .  " for your order!</h1>";
    echo "<p> Order Summary: </p>";
    echo "<ul>";
    foreach ($flavor as &$value){
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
    echo "<p> Order Total: $" . sizeof($flavor) * 3.50. "</p>";
}
?>

</body>
</html>