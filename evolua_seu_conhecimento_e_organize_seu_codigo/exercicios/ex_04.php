<!-- 4 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array. -->

<?php 
$notas = [5,6,8,1,3,10,8.5,4.6,7.8];
$notasOrdenadas = $notas;
rsort($notasOrdenadas);
$tresMaioresNotas = array_slice($notasOrdenadas, 0 , 3);
var_dump($tresMaioresNotas);