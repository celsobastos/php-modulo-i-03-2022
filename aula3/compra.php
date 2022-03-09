<?php
// echo '<pre>';
// print_r($_POST['lista']);    

$codigo_produto = $_POST['lista'];

switch($codigo_produto) {
    case 1 :
        echo 'Preço: 5,00';
    break;
    case 2 :
        echo 'Preço: 2,00';
    break;
    case 3 :
        echo 'Preço: 0,99';
    break;
    case 4 :
        echo 'Preço: 1,50';
    break;
    case 5 :
        echo 'Preço: 0,80';
    break;
    case 6 :
    case 7 :
        echo 'Preço: 6,80';
    break;
    default :
        echo 'Não escolheu produtos';
}