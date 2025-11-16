<!-- 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit. -->

<?php 
$celsius = $argv[1] ?? 21;
$celsiusToFahrenheit = ($celsius * 9/5) + 32;

echo "A temperatura $celsius em Fahrenheit é de: $celsiusToFahrenheit";
