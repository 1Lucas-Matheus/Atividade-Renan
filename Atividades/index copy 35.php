<?php
$idade_nadador = $_POST['idade_nadador'];

if ($idade_nadador >= 5 && $idade_nadador <= 7) {
    echo "Categoria: Infantil A";
} elseif ($idade_nadador >= 8 && $idade_nadador <= 10) {
    echo "Categoria: Infantil B";
} elseif ($idade_nadador >= 11 && $idade_nadador <= 13) {
    echo "Categoria: Juvenil A";
} elseif ($idade_nadador >= 14 && $idade_nadador <= 17) {
    echo "Categoria: Juvenil B";
} elseif ($idade_nadador >= 18 && $idade_nadador <= 25) {
    echo "Categoria: Sênior";
} else {
    echo "Idade fora da faixa etária";
}
?>
