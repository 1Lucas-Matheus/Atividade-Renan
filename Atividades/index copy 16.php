<?php
$nomeAluno = "Matheus";
$nota1 = 5;
$nota2 = 10;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Nome do aluno: $nomeAluno <br>";
echo "Média: $media <br>";

if ($media >= 7) {
    echo "Menção: Aprovado";
} elseif ($media <= 5) {
    echo "Menção: Reprovado";
} else {
    echo "Menção: Recuperação";
}
?>
