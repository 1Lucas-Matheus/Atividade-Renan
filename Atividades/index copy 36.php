<?php
$tipo_cliente = $_POST['tipo_cliente'];
$kw_consumido = $_POST['kw_consumido'];

switch ($tipo_cliente) {
    case 1:
        $valor_kw = 0.60;
        break;
    case 2:
        $valor_kw = 0.48;
        break;
    case 3:
        $valor_kw = 1.29;
        break;
    default:
        $valor_kw = 0;
        break;
}

$valor_conta = $kw_consumido * $valor_kw;
echo "Valor da conta de luz: $valor_conta";
?>
