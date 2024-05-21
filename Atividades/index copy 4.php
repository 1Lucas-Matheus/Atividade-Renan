<?php
$nome_vendedor = "Lucas";
$salario_fixo = 2000;
$total_vendas = 100;

$comissao = $total_vendas * 0.15;
$salario_final = $salario_fixo + $comissao;

echo "Nome do vendedor: $nome_vendedor <br>";
echo "Salário fixo: $salario_fixo <br>";
echo "Salário no final do mês: $salario_final";
?>
