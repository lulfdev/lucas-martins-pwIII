<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="c.php" method="POST">
Digite o valor: <input type="text" name="valor"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor'];
$porcentagem1 = $val1 * 0.15;
$porcentagem2 = $val1 * 0.50;
echo "5% de ", $val1, " é igual a ",$porcentagem1, " e 50% é igual a ",$porcentagem2;
?>
