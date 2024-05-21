<?php
$horas_aula = $_POST['horas_aula'];
$nivel = $_POST['nivel'];

switch ($nivel) {
    case 1:
        $valor_hora = 12;
        break;
    case 2:
        $valor_hora = 17;
        break;
    case 3:
        $valor_hora = 25;
        break;
    default:
        $valor_hora = 0;
        break;
}

$salario = $horas_aula * $valor_hora;
echo "Salário do professor: $salario";
?>
