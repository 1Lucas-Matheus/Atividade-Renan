<?php
$nome_funcionario = $_POST['nome_funcionario'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$salario_fixo = $_POST['salario_fixo'];

// Cálculo do desconto de acordo com o sexo e idade
if ($sexo === 'masculino' && $idade < 30) {
    $desconto = $salario_fixo * 0.1;
} elseif ($sexo === 'feminino' && $idade >= 30) {
    $desconto = $salario_fixo * 0.08;
} else {
    $desconto = $salario_fixo * 0.09;
}

$salario_liquido = $salario_fixo - $desconto;

echo "Nome do funcionário: $nome_funcionario <br>";
echo "Salário líquido: $salario_liquido";
?>
