<?php
// Dados do pretendente
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$grupo_risco = $_POST['grupo_risco'];

// Verificação da idade dentro da faixa permitida
if ($idade >= 17 && $idade <= 70) {
    // Determinação da categoria com base na idade e grupo de risco
    if ($grupo_risco == 1) {
        if ($idade >= 17 && $idade <= 30) {
            $categoria = "Categoria 1";
        } elseif ($idade >= 31 && $idade <= 50) {
            $categoria = "Categoria 2";
        } elseif ($idade > 50) {
            $categoria = "Categoria 3";
        }
    } elseif ($grupo_risco == 2) {
        if ($idade >= 17 && $idade <= 30) {
            $categoria = "Categoria 4";
        } elseif ($idade >= 31 && $idade <= 50) {
            $categoria = "Categoria 5";
        } elseif ($idade > 50) {
            $categoria = "Categoria 6";
        }
    } elseif ($grupo_risco == 3) {
        if ($idade >= 17 && $idade <= 30) {
            $categoria = "Categoria 7";
        } elseif ($idade >= 31 && $idade <= 50) {
            $categoria = "Categoria 8";
        } elseif ($idade > 50) {
            $categoria = "Categoria 9";
        }
    }

    // Imprimir os dados do pretendente e sua categoria
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Categoria: $categoria";
} else {
    // Imprimir mensagem de idade fora da faixa necessária
    echo "A idade do pretendente não está dentro da faixa necessária para adquirir seguro.";
}
?>
