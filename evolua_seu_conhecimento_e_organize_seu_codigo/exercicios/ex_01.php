<!-- 1. Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação. -->

<?php

function operacao($num1, $op, $num2): float
{
  if ($op === '/' && $num2 == 0) {
    throw new InvalidArgumentException("Erro: Divisão por zero não é permitida.");
  }

  switch ($op) {
    case "+":
      return $num1 + $num2;

    case "-":
      return $num1 - $num2;

    case "*":
      return $num1 * $num2;

    case "/":
      return $num1 / $num2;

    default:
      throw new InvalidArgumentException("Erro: Operação '$op' inválida.");
      break;
  }
}

echo operacao(3, "+", 7) . PHP_EOL;
echo operacao(7, "-", 5) . PHP_EOL;
echo operacao(6, "*", 5) . PHP_EOL;
echo operacao(10, "/", 5) . PHP_EOL;
