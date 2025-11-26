<?php

class ContaCorrente extends ContaBancaria
{
  public function __construct(
    float $saldo,
  )
  {
    parent::__construct($saldo);
  }

  const TARIFA_MENSAL = 10;
  const TARIFA_SAQUE = 5;

  public function cobrarTarifaMensal(): float
  {
    return $this->saldo -= self::TARIFA_MENSAL;
  }

  public function sacar($valorSaque): void {
    $valorTotal = $valorSaque += self::TARIFA_SAQUE;
    if($valorSaque <= 0 || $valorTotal > $this->saldo){
      echo "Erro: Verifique o valor do saque";
    } else {
      $this->saldo -=  $valorTotal;
      echo "Saque com taxa realizado. Novo saldo: {$this->saldo}\n";
    }
  }
}
