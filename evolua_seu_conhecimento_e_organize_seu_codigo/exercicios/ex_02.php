<!-- 2. Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro. -->

<?php 
function imc(float $peso, float $altura): void {
  $imc = round($peso / ($altura * $altura),2);

  if($imc < 18.5) {
    echo "IMC: $imc, classificação: Magreza";
  } else if ($imc < 25) {
    echo "IMC: $imc, classificação: Normal";
  } else if ($imc < 30) {
    echo "IMC: $imc, classificação: Sobrepeso";    
  } else if ($imc < 40) {
    echo "IMC: $imc, classificação: Obesidade";        
  } else {
    echo "IMC: $imc, classificação: Obesidade Grave";
  }
}

imc(80,1.70);