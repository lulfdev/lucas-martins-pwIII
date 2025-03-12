<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="j.php" method="POST">
Digite a distancia percorrida (km): <input type="text" name="valor1"><br>
Digite o combustivel gasto (litros): <input type="text" name="valor2"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor1'];
$val2 = $_POST ['valor2'];
$consumo = $val1 / $val2;

echo "Um carro que percorre ", $val1, " km gastando ",$val2, " litro(s) de gasolina tem um consumo médio de ", $consumo, " litro(s) por km"

?>