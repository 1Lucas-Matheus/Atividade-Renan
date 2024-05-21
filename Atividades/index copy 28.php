<?php
$total_aumento_folha = 0;

for ($i = 0; $i < 584; $i++) {
    $nome_funcionario = $_POST["nome_funcionario$i"];
    $salario = $_POST["salario$i"];
    $salario_minimo = $_POST['salario_minimo'];

    if ($salario < 3 * $salario_minimo) {
        $novo_salario = $salario * 1.5;
    } elseif ($salario >= 3 * $salario_minimo && $salario <= 10 * $salario_minimo) {
        $novo_salario = $salario * 1.2;
    } elseif ($salario > 10 * $salario_minimo && $salario <= 20 * $salario_minimo) {
        $novo_salario = $salario * 1.15;
    } else {
        $novo_salario = $salario * 1.1;
    }

    $aumento_folha = $novo_salario - $salario;
    $total_aumento_folha += $aumento_folha;

    echo "Nome do funcionário: $nome_funcionario <br>";
    echo "Reajuste: $aumento_folha <br>";
    echo "Novo salário: $novo_salario <br>";
}

echo "Aumento total da folha de pagamento: $total_aumento_folha";
?>
