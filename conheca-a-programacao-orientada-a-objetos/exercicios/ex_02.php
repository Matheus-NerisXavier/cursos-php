<!-- 2) Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;
 -->

 <?php

enum TipoConta {
   case Corrente;
   case Poupanca;
   case Investimento;
   case Universitaria;

  function verificarSeTemTaxa(): bool 
  {
    return match($this){
      TipoConta::Corrente, TipoConta::Investimento => true,
      TipoConta::Poupanca, TipoConta::Universitaria  => false,
    };
   }
  }

$conta = TipoConta::Poupanca;

if($conta->verificarSeTemTaxa()){
  echo "A conta selecionada TEM taxas.\n";
} else {
  echo "A conta selecionada NÃO tem taxas.\n";
}