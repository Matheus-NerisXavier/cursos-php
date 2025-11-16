<!-- 10 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela. -->

<?php 
$conta = [
  "titular" => "Matheus Neris",
  "saldo" => 1000
];

echo $conta["titular"] . PHP_EOL;
echo $conta["saldo"] . PHP_EOL;