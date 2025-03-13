<?php

$texto = file_get_contents(__DIR__ . "/teste.txt");
echo "$texto";


// // Outra alternativa
// $arquivo = fopen('teste.txt', 'r');
// $primeiraLinha = fgets($arquivo);
// fclose($arquivo);