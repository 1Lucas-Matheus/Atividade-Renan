<?php
$nomeEstudante = $_POST['nomeEstudante'];
$numeroMatricula = $_POST['numeroMatricula'];
$notaLab = $_POST['notaLab'];
$nota_semestral = $_POST['nota_semestral'];
$nota_final = $_POST['nota_final'];

$nota_final = ($notaLab * 2 + $nota_semestral * 3 + $nota_final * 5) / 10;

echo "Nome do estudante: $nomeEstudante <br>";
echo "Número de matrícula: $numeroMatricula <br>";
echo "Nota final: $nota_final <br>";

if ($nota_final >= 8 && $nota_final <= 10) {
    echo "Classificação: A";
} elseif ($nota_final >= 7 && $nota_final < 8) {
    echo "Classificação: B";
} elseif ($nota_final >= 6 && $nota_final < 7) {
    echo "Classificação: C";
} elseif ($nota_final >= 5 && $nota_final < 6) {
    echo "Classificação: D";
} else {
    echo "Classificação: R";
}
?>
