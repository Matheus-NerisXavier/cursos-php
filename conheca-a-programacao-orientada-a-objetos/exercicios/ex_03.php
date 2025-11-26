<!-- 3) Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas. -->

<?php
enum TipoConta {
  case Corrente;
  case Universitaria;
  case Poupanca;
  case Investimento;
}

class Conta
{
  private float $saldo;

  public function __construct(
    public readonly string $nome,
    public readonly TipoConta $tipo_conta,
  ) {
    $this->saldo = 0;
  }
}
