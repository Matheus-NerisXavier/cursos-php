<!-- 6 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética. -->

<?php
function sortText (array $texto): array {
  sort($texto);
  return $texto;
}

$textos = ["Melão", "Banana", "Arroz", "Batata", "Pipoca"];

var_dump(sortText($textos));