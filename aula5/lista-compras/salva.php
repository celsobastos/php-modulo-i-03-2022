<?php

$codigo_produto = (int) $_POST['produto'];

$filter = filter_var($codigo_produto, FILTER_SANITIZE_STRING);

$produtos = [
    1 => 'Camiseta',
    2 => 'Calça',
    3 => 'Bermuda',
    4 => 'Jaqueta',
];

switch ($filter) {

    case '1':
        $lista = ['id' => 1, 'produto' => $produtos[1], 'preco' => 25 ];
    break;  
    case '2':
        $lista = ['id' => 2, 'produto' => $produtos[2], 'preco' => 35 ];
    break; 
    case '3':
        $lista = ['id' => 3, 'produto' => $produtos[3], 'preco' => 29 ];
    break; 
    case '4':
        $lista = ['id' => 4, 'produto' => $produtos[4], 'preco' => 84 ];
    break; 
}

// foreach ($lista as $id => $value) {
//     $dados[$id] = $value;
// }

$file = 'carrinho.txt';

$recupera_carrinho = file_get_contents("./$file", true);
$carrinho = (array) json_decode($recupera_carrinho);

$carrinho[] = $lista;

file_put_contents("./$file", json_encode($carrinho), LOCK_EX);
// unset apata itens da lista
header("Location: carrinho.php");