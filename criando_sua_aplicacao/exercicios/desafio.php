<?php

$nome = "Matheus Neris";
$saldoAtual = 100;

echo "************************\n";
echo "Titular: $nome\n";
echo "Saldo atual: $saldoAtual\n";
echo "************************\n";

do {
  echo " 1. Consultar saldo atual\n 2. Sacar valor\n 3. Depositar valor\n 4. Sair\n";
  $opcao = trim(fgets(STDIN));

  switch ($opcao) {
    case 1:
      echo "************************\n";
      echo "Titular: $nome\n";
      echo "Saldo atual: $saldoAtual\n";
      echo "************************\n";
    break;

    case 2:
      echo "Digite o valor do saque\n";
      $valorSaque = (float) fgets(STDIN);
      if ($valorSaque <= 0 || $valorSaque > $saldoAtual) {
        echo "O valor do saque deve ser positivo e não pode ser maior que o seu saldo\n";
      } else {
        $saldoAtual -= $valorSaque;
      }
    break;

    case 3:
      echo "Digite o valor do deposito\n";
      $valorDoDeposito = fgets(STDIN);
      if ($valorDoDeposito <= 0) {
        echo "O valor do deposito deve ser maior que 0\n";
      } else {
        $saldoAtual += $valorDoDeposito;
      }
    break;

    case 4:
      echo "Até mais\n";
    break;

    default:
      echo "Opção invalida verifique\n";
    break;
  }
} while ($opcao != 4);
