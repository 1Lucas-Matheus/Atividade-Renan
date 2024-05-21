<!-- Não fiz o formulario que envie esses valores -->

<?php
$CarrosDe2000 = 0;
$totalGeral = 0;

do {
    $anoCarro = $_POST['anoCarro'];
    $valorCarro = $_POST['valor_veiculo'];

    if ($anoCarro <= 2000) {
        $desconto = $valorCarro * 0.12;
        $CarrosDe2000++;
    } else {
        $desconto = $valorCarro * 0.07;
    }

    $preçoFinal = $valorCarro - $desconto;
    $totalGeral += $preçoFinal;

    echo "Valor do desconto: $desconto <br>";
    echo "Valor a ser pago pelo cliente: $preçoFinal <br>";
} while ($_POST['continuar'] === 'sim');

echo "Total de carros até 2000: $CarrosDe2000 <br>";
echo "Total geral: $totalGeral";
?>
