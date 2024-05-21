<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

if ($valor1 < $valor2 + $valor3 && $valor2 < $valor1 + $valor3 && $valor3 < $valor1 + $valor2) {
    if ($valor1 === $valor2 && $valor2 === $valor3) {
        echo "Triângulo Equilátero";
    } elseif ($valor1 === $valor2 || $valor1 === $valor3 || $valor2 === $valor3) {
        echo "Triângulo Isósceles";
    } else {
        echo "Triângulo Escaleno";
    }
} else {
    echo "Os valores informados não podem formar um triângulo";
}
?>
