<!-- 5 - Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas. -->

<?php 
$texto = "Vinicius Dias,1997,Programador";
$delimitador = ",";
$resultado = explode($delimitador, $texto);
print_r($resultado);