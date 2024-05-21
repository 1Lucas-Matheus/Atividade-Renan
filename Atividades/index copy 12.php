<?php
$custoFabrica = 10000;

$impostos = $custoFabrica * 0.45;
$porcentagemDistribuidor = $custoFabrica * 0.28;

$custoConsumidor = $custoFabrica + $impostos + $porcentagemDistribuidor;

echo "O custo ao consumidor do carro é: $custoConsumidor";
?>
