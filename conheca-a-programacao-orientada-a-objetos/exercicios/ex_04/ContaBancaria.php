<?php

class ContaBancaria
{
  protected float $saldo;

  public function __construct(
    float $saldoInicial
  )
  {
    $this->saldo = $saldoInicial;
  }

 
  public function depositar($valorDeposito): void
  {
    if($valorDeposito <= 0) {
      echo "Erro: O valor do deposito não pode ser 0 ou negativo";
    } else {
      echo $this->saldo += $valorDeposito;
    }
  }

  public function sacar($valorSaque): void
  {
    if($valorSaque <= 0 || $valorSaque > $this->saldo){
      echo "Erro: Verifique o valor do saque";
    } else {
      echo $this->saldo -= $valorSaque;
    }
  }

  public function consultarSaldo(): float
  {
    return $this->saldo;
  }
}