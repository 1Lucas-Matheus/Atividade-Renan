<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

$valores = array($valor1, $valor2, $valor3);
sort($valores);

echo "Valores em ordem crescente: " . implode(", ", $valores);
?>
