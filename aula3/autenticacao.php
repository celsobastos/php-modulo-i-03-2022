<?php

$auth = $_GET;
$senha = $auth['senha'];

// $qtde_caracteres = strlen($senha);

// if ($qtde_caracteres > 10) {
//     echo 'Senha não pode conter mais do que 10 caracteres';
// }elseif($qtde_caracteres < 5){
//     echo 'Senha não pode ser menor que 5 caracteres';
// }else {
//     echo 'Senha está correta'; 
// }


// if ($qtde_caracteres > 10) {
//     echo 'Senha não pode conter mais do que 10 caracteres';
// }
// else {
//     if($qtde_caracteres < 5 ) {
//         echo 'Senha não pode ser menor que 5 caracteres';
//     }
//     else {
//         echo 'Senha está correta';
//     }
// }

if(isset($auth['senha'])) {
    //echo 'Senha existe';
}
echo '<br>';
if(isset($auth['email'])) {
    //echo 'Email existe';
}

$email = $_GET['email'];
$test = stripos($email, '@');
$mensagem = 'ok';
if($test === false) {
    $mensagem = 'erro';
}

 // (?:) Operador Ternario

$test_ternario = $mensagem === 'ok' ? 'Email Valido' : 'Email invalido';
echo $test_ternario;

// echo $auth = $_GET['email'];
//header('Location: form.php?login=' . $mensagem);


//header('Location: form.php?login=ok');

// echo '<pre>';
// print_r($_GET);