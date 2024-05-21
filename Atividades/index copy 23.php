<?php
$numero = $_POST['numero'];

if ($numero > 80) {
    echo "O número é maior que 80.";
} elseif ($numero < 25) {
    echo "O número é menor que 25.";
} elseif ($numero === 40) {
    echo "O número é igual a 40.";
} else {
    echo "O número não se encontra nas condições especificadas.";
}
?>
