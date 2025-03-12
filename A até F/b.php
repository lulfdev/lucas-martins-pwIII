<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="b.php" method="POST">
Digite o valor: <input type="text" name="valor"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$val1 = $_POST ['valor'];
$porcentagem = $val1 * 0.15;
echo "15% de ", $val1, " é igual a ",$porcentagem;
?>
