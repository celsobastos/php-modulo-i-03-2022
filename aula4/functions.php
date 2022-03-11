<?php

define('HOME','pagina.php');

/**
 * 
 */
function validaTipoDeArquivo($typo, $extensao){
    $is_extension = strrpos($extensao, $typo);

    if ($is_extension === false) {
        return false;
    }
    return true;
}

//validaTipoDeArquivo('gif','image/gif');
$calculo = 10;
function soma($num) {
   global $calculo;
   $calculo += $num + 1;
   echo subtrai(5);
}

function subtrai($num){
    return $num - 1;
}

// soma(4);
// echo $calculo;
// echo '<br>';
// $resultado = subtrai(8);
// echo $resultado;

$lista = [
    'nome' => 'Beatriz',
    'idade' => 25,
    'salario' => 5000,
];

function updateData(
    int $idade,
    array &$pessoa,
    float $salario = 2000,
    object $carro
) : array {
    $pessoa['idade']    = $idade;
    $pessoa['salario']  = $salario;
    $pessoa['carro']  = $carro;
    return $pessoa;
}

$resultado = updateData(15, $lista, 1000, new stdClass() );

// echo '<pre>';
// echo 'Print Resultado';
// echo '<br>';
// print_r($resultado);
// echo '<hr>';
// echo 'Print Lista';
// echo '<br>';
// print_r($lista);

$alert = ', e posso ser enviado por parametro';

// $func = function () use ($alert) {
//     return 'Olá eu sou uma função closure!' . $alert;
// };
// $message = function ($func) {
//     echo $func();
// };
// $message($func);

// function seguranca($callback, $callback2){
//     $callback('tente novamente');
//     $callback2('tentativas falharam');
// }

// seguranca(function ($mensagem) {
//     echo 'Senha incorreta, ' . $mensagem;
// },
// function ($mensagem) {
//     echo 'Senha incorreta, ' . $mensagem;
// });

$lista_teste = [
    'nome' => 'Beatriz',
    'idade' => 25,
    'salario' => 5000,
];

$data_pessoas = implode(' - ', $lista_teste);
// echo $data_pessoas;

$html = '<b>aulas impacta</b>';
$data_array = explode(' ',$html);
// echo '<pre>';
// print_r($data_array);

$text = 'Líder global em pesquisa de mercado, 
a Ipsos oferece informações confiáveis e 
um entendimento verdadeiro da sociedade, 
dos mercados e das pessoas.';
// echo $text;
// echo '<br>';

$new_text = str_replace(['global','pessoas'],['Mundial','Gente'], $text);

// echo $new_text;
// echo '<br>';

// $myText = ' Especiais ';
// echo strlen($myText);
// $myTextNew = trim($myText);
// echo '<br>';
// echo strlen($myTextNew);

// $newSlice = substr($myTextNew,1,3); 
// echo '<br>';
// echo $newSlice;

// echo ucfirst('isadora da silva');

// echo substr('Isabela Ribeiro', 0, 5);

// $subject = "r45454545454sdd654";
// $pattern = '/</?b>/';
// preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
// print_r($matches);

// echo rand(1, 10);
// $a  =  1.8;
// $b  =  1.5;
// $c  =  1.6;
// echo round($a);
// echo '<br>';
// echo round($b);
// echo '<br>';
// echo round($c);

