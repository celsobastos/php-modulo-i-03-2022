<?php

// echo '<pre>';
// print_r($_FILES);

$file = $_FILES['upload'];
$type = $file['type'];
$nome_arquivo = $file['name'];

/*
$bodytag = str_replace("jpeg", "gif", $type);
echo $type;
echo '<br>';
echo $bodytag;
die;*/


$pos = strrpos($type , "jpeg");
if ($pos === false) {
    echo 'Ops, só aceitamos arquivos JPEG';
    die; 
}

// $fragmentacao = explode('/',$type);
// if(!in_array('jpeg',$fragmentacao)) {
//     echo 'Só aceitamos arquivos JPEG';
//     die;
// }

$result = move_uploaded_file($file['tmp_name'], __DIR__ . "/files/$nome_arquivo" );

if ($result) {
    echo 'arquivo movido com sucesso.';
} else {
    echo 'Arquivo não pode ser transferido';
}