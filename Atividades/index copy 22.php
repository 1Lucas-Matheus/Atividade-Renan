<?php
$total_produtos = 40;
$total_lucro = 0;
$total_prejuizo = 0;
$total_empate = 0;

$soma_preco_custo = 0;
$soma_preco_venda = 0;

for ($i = 0; $i < $total_produtos; $i++) {
    $preco_custo = $_POST["preco_custo$i"];
    $preco_venda = $_POST["preco_venda$i"];

    $soma_preco_custo += $preco_custo;
    $soma_preco_venda += $preco_venda;

    if ($preco_venda > $preco_custo) {
        echo "Produto $i: Lucro <br>";
        $total_lucro++;
    } elseif ($preco_venda < $preco_custo) {
        echo "Produto $i: Prejuízo <br>";
        $total_prejuizo++;
    } else {
        echo "Produto $i: Empate <br>";
        $total_empate++;
    }
}

$media_preco_custo = $soma_preco_custo / $total_produtos;
$media_preco_venda = $soma_preco_venda / $total_produtos;

echo "Média de preço de custo: $media_preco_custo <br>";
echo "Média de preço de venda: $media_preco_venda";
?>
