<!-- 9 - Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto. -->

<?php 

$texto = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$textoEmObjeto = json_decode($texto);
var_dump($textoEmObjeto);