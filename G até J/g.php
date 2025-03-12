<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="g.php" method="POST">
Digite o comprimeto (metros): <input type="text" name="valor1"><br>
Digite a largura (metros): <input type="text" name="valor2"><br>
Digite a altura (metros): <input type="text" name="valor3"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor1'];
$val2 = $_POST ['valor2'];
$val3 = $_POST ['valor3'];
$volume = $val1 * $val2 * $val3;

echo "O volume dessa caixa retangular é de ", $volume, "m³"

?>
