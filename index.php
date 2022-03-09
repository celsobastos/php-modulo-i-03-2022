<?php
/** 
 *  variaveis
 */

$Nome;
$nome_completo = 'Carlos da Silva';

$dataNascimento = '10/02/2001';
$newDate = &$dataNascimento;
function dataDeNascimento(&$datas){
    $datas[] = '01/02/2000';
}
$datas = ['02/04/2005','14/03/1988'];
dataDeNascimento($datas);
//print_r($datas);

$salario = 4000;
function aumento(){
    // global $salario;
    // echo "O salário é de: " . $salario;
    //echo $GLOBALS['salario'];
}

aumento();
//echo "Salario Fora da Função é de: " . $salario;

/*
$idade = '15';
unset($idade);
var_dump(empty($idade));
echo '<hr>';
var_dump(isset($idade));
*/
// echo '<pre>';
// print_r($_SERVER['REMOTE_ADDR']);

// echo phpinfo();

// $nome = 'Edu';
// if (!is_null($nome)) { // is_real, is_string, is_array
//     echo 'Sim é null';
// }
$nome = is_numeric($_GET['nome']);

$x = '3';
$y = 3;
$calc = ($x + $y) * 2; // * mult / divisão - subtraçao 

// $nome = 'Paulo';
// $sobreNome = 'Silva';
// $nome .= $sobreNome;
// echo $nome;

$pessoas = [
    'Ana' => ['idade' => 20, 'nasc' => '10-08-2004'],
    'Eduardo' => ['idade' => 45, 'nasc' => '11-081988'],
    'Lucia' => ['idade' => 45, 'nasc' => '11-081988'],
    'Amanda' => ['idade' => 45, 'nasc' => '11-081988'],
    'Ze' => ['idade' => 45, 'nasc' => '11-081988'],
];

$horarios = [
    '8:00' => '10',
    '9:00' => '5',
];

$datas = [
    '10-02',
    '20-03',
];

$resultado = [
    '10-02' => [
        '08-00' => [],
        '09-00' => [],
    ],
    '20-03' => [
        '08-00' => [],
        '09-00' => [],
    ],
];

$i = 0;
while ($i < count($pessoas)):
    if($pessoas[$i] === 'Lucia'){
        echo $pessoas[$i] . '<br>';
        break;
    }
    //$i = $i + 1;
    $i++;
endwhile;

for ($i = 0; $i < count($pessoas); $i++) {
    if($pessoas[$i] === 'Amanda'){
        echo $pessoas[$i] . '<br>';
        break;
    }
}

foreach ($pessoas as $key => $dados){
    echo $key . '<br>';
    $info = '';
    foreach($dados as $dado){
        $info .= ' | ' . $dado;
    }

    echo $info;
    echo '<hr>';
}

$numeros = 10;

$soma = $numeros + 1;
$numeros .= 1;





//var_dump($x >= $y);

//echo $calc;

// if($nome){
//     echo 'Não pode digitar numeros neste campo';
// }
//echo 'is : ' . $nome;

//echo gettype($nome);



// print($_GET['nome']);
// Operadores Lógicos
// E => &&,  
// ou => ||,
// negação => ! 
// xor

$nota = $_GET['nota'];
$faltas = $_GET['faltas'];
$trabalho = false;

if ($nota >= 7 xor $trabalho) {
    echo '<h1>Aprovado</h1>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Hello World!</h1>
        <p><?php echo $salario ?></p>
        <form>
            Nome: <input type="text" name="nome"> <br>
            Nota: <input type="text" name="nota"> <br>
            Faltas: <input type="text" name="faltas"> <br>
            <button>Send</button>
        </form>
        <?php
        foreach ($pessoas as $key => $dados){
            $info = '';
            foreach($dados as $dado){
                $info .= ' | ' . $dado;
            }
        ?>
        <h2> <?php echo $key; ?> </h2> 
        <h3> <?php echo $info; ?> </h3>    
        
        <?php } ?>
    </section>
</body>
</html>

