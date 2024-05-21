<?php
$contagem = 0;

for ($i = 0; $i < 80; $i++) {
    $numero = 40;
    if ($numero >= 10 && $numero <= 150) {
        $contagem++;
    }
}

echo "Quantidade de números no intervalo entre 10 e 150: $contagem";
?>
