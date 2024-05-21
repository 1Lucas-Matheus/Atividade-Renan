<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operador = $_POST['operador'];

if ($operador === '/' && $valor2 != 0) {
    $resultado = $valor1 / $valor2;
    echo "Resultado da divisão: $resultado";
} elseif ($operador === '/' && $valor2 == 0) {
    echo "Erro: divisão por zero";
} else {
    echo "Operador não definido";
}
?>
