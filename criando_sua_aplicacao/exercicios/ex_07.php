<!-- 7 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC. -->

<?php 
$peso = 80;
$altura = 1.70;
$imc = round($peso / ($altura * $altura), 2);

if($imc < 18.5) {
  echo "Seu imc foi $imc e a classificação é de: Magreza";
} else if ($imc < 25) {
  echo "Seu imc foi $imc e a classificação é de: Normal";
} else if ($imc < 30) {
  echo "Seu imc foi $imc e a classificação é de: Sobrepeso";
} else if ($imc < 40) {
  echo "Seu imc foi $imc e a classificação é de: Obesidade";
} else {
  echo "Seu imc foi $imc e a classificação é de: Obesidade Grave";
}