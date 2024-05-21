<?php
for ($i = 0; $i < $_POST['quantidade_numeros']; $i++) {
    $numero = $_POST["numero$i"];
    
    if ($numero > 0) {
        echo "$numero é positivo <br>";
    } elseif ($numero < 0) {
        echo "$numero é negativo <br>";
    } else {
        echo "$numero é zero <br>";
    }
}
?>
