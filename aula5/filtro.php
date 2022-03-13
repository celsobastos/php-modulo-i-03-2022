<?php

// $email = htmlentities($_POST['email']);
// $senha = $_POST['comentario'];
$email = htmlentities($_POST['email']);

if(!empty($email)){
    $dados = json_encode($_POST);
    file_put_contents('usuario.txt', $dados, LOCK_EX);

    $dados_json = file_get_contents("./usuario.txt", true);
    
    $dados_decode = (array) json_decode($dados_json);
    echo '<pre>';
    print_r($dados_decode['email']);

    exit;

}

// $email = htmlentities($_POST['email']);
// if(!empty($email)){

// $senha = $_POST['senha'];
// $file = 'senha.txt';
// if(file_exists("./$file")){
//  $arquivo = file_get_contents("./$file", true);
//  //$hash = password_hash($senha, PASSWORD_BCRYPT);
//  $hash = sha1($senha);
//  if($hash === $arquivo) {
//     echo 'Senhas iguais';
//  }
//  else {
//      echo 'não são iguais';
//  }
// }
// else {
//     file_put_contents($file, sha1($senha), LOCK_EX);
// }
/** Converte string do formato ISO-8859-1 para UTF-8 */
//echo utf8_encode($email);

/** Filtra dados*/
// $filtraEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
// var_dump($filtraEmail);
// die;
//}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php //echo $email; ?>
    <br>
    <hr>
    <form method="POST">
        Email: <input type="text" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <textarea id="" cols="30" rows="10" name="comentario"></textarea>
        <br>
        <button>Login</button>
    </form>

    
</body>
</html>