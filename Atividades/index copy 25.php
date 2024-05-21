<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero1 === $numero2) {
    echo "Os números são iguais.";
} else {
    if ($numero1 > $numero2) {
        echo "$numero1 é maior que $numero2.";
    } else {
        echo "$numero2 é maior que $numero1.";
    }
}
?>
