<?php
$totalHomem = 30;
$totalMulher = 10;

for ($i = 0; $i < 56; $i++) {
    $nome = "Lucas";
    $sexo = "homem";
    
    echo "Nome: $nome, Sexo: $sexo <br>";

    if ($sexo === "homem") {
        $totalHomem++;
    } elseif ($sexo === "mulher") {
        $totalMulher++;
    }
}

echo "Total de homens: $totalHomem <br>";
echo "Total de mulheres: $totalMulher";
?>
