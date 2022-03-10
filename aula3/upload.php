<?php
include "functions.php";
// echo '<pre>';
// print_r($_FILES);

$file = $_FILES['upload'];
$type = $file['type'];
$nome_arquivo = $file['name'];

$file_name = date('d-m-Y-h-i-s-') . $nome_arquivo ;
/*
$bodytag = str_replace("jpeg", "gif", $type);
echo $type;
echo '<br>';
echo $bodytag;
die;*/


if(!validaTipoDeArquivo('jpeg')){
    echo 'Ops! Só aceitamos arquivos JPEG';
    die;  
}

$fragmentacao = explode('/',$type);

if(!in_array('jpeg',$fragmentacao)) {
    echo 'Só aceitamos arquivos JPEG';
    die;
}
// isset(); exist
// empty(); está vazia

$extensao = $fragmentacao[1];

$result = move_uploaded_file($file['tmp_name'], __DIR__ . "/files/imagem.$extensao" );

if ($result) {
    echo 'arquivo movido com sucesso.';
    header('Location: form.html');
} else {
    echo 'Arquivo não pode ser transferido';
}