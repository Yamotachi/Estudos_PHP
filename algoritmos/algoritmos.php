<?php

// 1º algoritmo - Nome completo
$nome = "Guilherme";
$sobrenome = "Souza";
$nomeCompleto = $nome . ' ' . $sobrenome;
//echo $nomeCompleto . PHP_EOL;

//2º algoritmo - Média aritmética
$nota1 = 9;
$nota2 = 6;
$nota3 = 3;
$nota4 = 7.4;
const notas = 4;
$mediaAritmetica = ($nota1 + $nota2 + $nota3 + $nota4)/notas;
//echo $mediaAritmetica . PHP_EOL;

//3º algoritmo - Mensagem personalizada
$mensagem = "$nomeCompleto, a sua média foi de $mediaAritmetica.";

echo $mensagem;