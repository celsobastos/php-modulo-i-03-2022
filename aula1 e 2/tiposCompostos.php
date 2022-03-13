<?php
 // boleano string integer float

 /**
  * Tipos complexos
  */

// Array associativo chave valor

$array = array('Paulo', 'Maria', 'Ana');
$arrayNomes = [1 => 'Paulo', 2 => 'Maria', 3 => 'Ana'];

//print_r($arrayNomes);

sort($arrayNomes);
$alunos = [];
$alunos[] = 'Ricardo';
$alunos[] = 'Bastos';

/** Associativo */
$funcionarios = [
    'nome' => 'Pedro',
    'endereco' => 'Rua. Emanuael Ribeiro',
    'idade' => 58,
    'contrato' => true,
    'historico' => [
        '05-2020' => 2000,
        '10-2021' => 3000
    ],
];
$funcionarios['salario'] =  5000.52;

//$funcionarios['nome'] = 'João';

// foreach($funcionarios as $key => $value) {
//     if($key == 'historico') {
//         foreach($value as $key_historico => $value_historico) {
//             echo $key_historico . ' | ' . $value_historico . PHP_EOL;
//         }
//         continue;
//     } 
//     echo $key . ' | ' . $value . PHP_EOL;
// }

// $funcionarios[] = '123';
// $funcionarios[] = '123456';

// print_r($funcionarios);


// unset($funcionarios['nome']);
// in_array('nome', $funcionarios);
// echo $exist;

//echo $arrayNomes[1] . "\n";
// print_r($funcionarios);
// print_r($arrayNomes);


/** Objetos */
function aumentoSalarial($salario , $aumento) {
    $novo_salario = $salario + $salario *  $aumento / 100;
    return $novo_salario;
}
$aumento = aumentoSalarial(2000, 20);
// echo $aumento . PHP_EOL;


$pessoa = new stdClass();
$pessoa->nome = 'Gustavo';
$pessoa->sobrenome = 'Silva';
$pessoa->idade = 25;

// var_dump($pessoa->nome);

$endereco = null;
$endereco2 = 'Rua: mandaqui';
// unset($endereco2);
// var_dump($endereco2);

/** conversão */

$a = 5 + "2";
// var_dump($a);

$boleano = true;
$decimal = 9.55;

settype($decimal, 'integer');
settype($boleano, 'string');

// var_dump($decimal);
// var_dump($boleano);

$string = (int) '1'; // (integer) (float) (string) (array) (object)

//var_dump($string);