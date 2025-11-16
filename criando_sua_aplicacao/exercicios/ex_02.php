<!-- 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.-->

<?php 

$nota1 = 5;
$nota2 = 10;
$nota3 = 2.5;
$somaDeNotas = $nota1 + $nota2 + $nota3;
$media = round($somaDeNotas / 3, 2);

echo "A média é: $media";