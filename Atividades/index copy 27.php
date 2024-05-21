<?php
$total_desconto = 0;
$total_pago = 0;

do {
    $valor_veiculo = $_POST['valor_veiculo'];
    $combustivel = $_POST['combustivel'];

    switch ($combustivel) {
        case 'álcool':
            $desconto = $valor_veiculo * 0.25;
            break;
        case 'gasolina':
            $desconto = $valor_veiculo * 0.21;
            break;
        case 'diesel':
            $desconto = $valor_veiculo * 0.14;
            break;
    }

    $valor_a_pagar = $valor_veiculo - $desconto;

    if ($valor_veiculo > 0) {
        echo "Valor do desconto: $desconto <br>";
        echo "Valor a ser pago pelo cliente: $valor_a_pagar <br>";
    }

    $total_desconto += $desconto;
    $total_pago += $valor_a_pagar;
} while ($valor_veiculo > 0);

echo "Total de desconto: $total_desconto <br>";
echo "Total pago pelos clientes: $total_pago";
?>
