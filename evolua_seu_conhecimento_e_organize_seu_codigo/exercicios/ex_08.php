<!-- 8 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche. -->

<?php 
$caminhoDoArquivo = __DIR__ . "/arquivos/teste.txt";

$handle = fopen($caminhoDoArquivo, "a");

fwrite($handle, "\nPHP é incrível!");
fclose($handle);