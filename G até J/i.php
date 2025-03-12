<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="i.php" method="POST">
Digite o valor: <input type="text" name="valor"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor'];
$valortotal = $val1 * 0.16 + $val1;
$parcelas = $valortotal / 10;
echo "o valor total após optar por pagar em 10x com juros de 16% fica ",$valortotal," reais, e cada parcela terá o preço de ",$parcelas, " reais"
?>