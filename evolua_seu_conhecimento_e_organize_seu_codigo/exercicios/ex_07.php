<!-- 7- Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha. -->
<?php 

$caminhoArquivo = __DIR__ . '/arquivos/teste.txt';
$handle = fopen($caminhoArquivo, "r");

if($handle) {
  $primeiraLinha = fgets($handle);
  echo $primeiraLinha;
  fclose($handle);
}
