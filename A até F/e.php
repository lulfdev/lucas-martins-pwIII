<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="e.php" method="POST">
Digite o peso em kg: <input type="text" name="peso"><br>
Digite sua altura em metros: <input type="text" name="altura"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$peso = $_POST ['peso'];
$altura = $_POST ['altura'];
$imc = $peso / ($altura * $altura);

echo "O IMC é de ",$imc;



?>