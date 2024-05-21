<?php
$totalAptos = 0;
$totalInaptos = 0;

$totalPessoas = $totalAptos + $totalInaptos;

for ($i = 0; $i < $totalPessoas; $i++) {
    $nome = "Lucas";
    $sexo = "Homem";
    $idade = "16";
    $saude = "Mal";
    
    echo "Nome: $nome, Sexo: $sexo, Idade: $idade, Saúde: $saude <br>";

    if ($idade >= 18 && $idade <= 30 && $saude === "apta") {
        echo "Apto para o serviço militar obrigatório <br>";
        $totalAptos++;
    } else {
        echo "Inapto para o serviço militar obrigatório <br>";
        $totalInaptos++;
    }
}

echo "Total de aptos: $totalAptos <br>";
echo "Total de inaptos: $totalInaptos";
?>
