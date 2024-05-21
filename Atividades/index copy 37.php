<?php
$altura = $_POST['altura'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

if ($sexo === 'masculino') {
    $peso_ideal = (72.7 * $altura) - 58;
} else {
    $peso_ideal = (62.1 * $altura) - 44.7;
}

echo "Peso ideal: $peso_ideal";
?>
