<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="d.php" method="POST">
Digite o primeiro numero: <input type="text" name="valor1"><br>
Digite o segundo numero: <input type="text" name="valor2"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor1'];
$val2 = $_POST ['valor2'];
$quad1 = $val1 * $val1;
$quad2 = $val2 * $val2;
$somaquads = $quad1 + $quad2;

echo "O quadrado de ",$val1, " é ",$quad1, ", o quadrado de ",$val2, " é ",$quad2, " e a soma desses 2 quadrados é igual a ",$somaquads;

?>
