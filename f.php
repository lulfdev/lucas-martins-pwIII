<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="f.php" method="POST">
Digite o preço do produto: <input type="text" name="produto"><br>
<input type="submit">

</form>

</body>
</html>

<?php 
$produto = $_POST ['produto'];
$valordescontado = $produto * 0.07;
$valorfinal = $produto - $valordescontado;
echo "O preço inicial do produto é ",$produto, " reais, com o desconto de 7% foi descontado ",$valordescontado, " reais e o valor final após o desconto é de ",$valorfinal;
?>