<?php

// unica linha

/* 
 Comentário de mais de uma linha   
*/

$corpo = <<<HTML
<html>
    <head>
        <title>Minha pagina</title>
    </head>
    <body>
    <h1>Herodoc</h1>
    </body>
</html>
HTML;

var_dump($corpo);
print_r($corpo);
die;

$fullName = 'Impacta';
var_dump($fullName);

$nome = "Carlos Antônio";
$idade = 15;
$dados = 'olá ' . $nome . ' miha idade é ' . $idade . PHP_EOL;
echo $dados;
die;


$salario = 40.5; // float double
$contrato = true; // true false
$test = 5 > 8; //true or false
$tipo = gettype($salario);

echo $tipo . "\n";