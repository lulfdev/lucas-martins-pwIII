<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="h.php" method="POST">
Digite o valor: <input type="text" name="valor"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor'];
$desconto = $val1 * 0.63;
echo "um produto com preço de ",$val1," reais passa a custar ",$desconto, " reais após um desconto de 27%"
?>