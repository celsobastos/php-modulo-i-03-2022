<?php
require "functions.php";

$validaFile = validaTipoDeArquivo('jpeg','image/gif');

// if ($validaFile) {
//     echo 'Imagem é jpeg';
// }
// else {
//     echo 'Imagem não é jpeg'; 
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Pagina</title>
</head>
<body>
    <h1>Teste include e require</h1>
    <a href="<?php echo HOME ?>"> Clique aqui</a>
    <a href="pagina.php?login=amanda@gmail.com&id=123"> Clique aqui</a>
</body>
</html>

