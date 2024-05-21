<?php
$nome_pessoa = $_POST['nome_pessoa'];
$idade_pessoa = $_POST['idade_pessoa'];
$grupo_risco = $_POST['grupo_risco'];

if ($idade_pessoa >= 17 && $idade_pessoa <= 70) {
    switch ($grupo_risco) {
        case 1:
            if ($idade_pessoa >= 17 && $idade_pessoa <= 30) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 1";
            } elseif ($idade_pessoa >= 31 && $idade_pessoa <= 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 2";
            } elseif ($idade_pessoa > 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 3";
            }
            break;
        case 2:
            if ($idade_pessoa >= 17 && $idade_pessoa <= 30) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 4";
            } elseif ($idade_pessoa >= 31 && $idade_pessoa <= 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 5";
            } elseif ($idade_pessoa > 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 6";
            }
            break;
        case 3:
            if ($idade_pessoa >= 17 && $idade_pessoa <= 30) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 7";
            } elseif ($idade_pessoa >= 31 && $idade_pessoa <= 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 8";
            } elseif ($idade_pessoa > 50) {
                echo "Nome: $nome_pessoa, Idade: $idade_pessoa, Categoria: Categoria 9";
            }
            break;
    }
} else {
    echo "Idade fora da faixa necessária para adquirir seguro.";
}
?>
