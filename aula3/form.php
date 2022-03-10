<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>
<body>
    <div id="error" style="color:red">
        <?php
            // $message = $_GET['login'];
            // if ($message !== 'ok') {
            //     echo 'Email Invalido';
            // }
        ?>
    </div>
    <form action="autenticacao.php" method="GET">
        Email: <input type="text" name="email" id="email">
        Senha: <input type="password" name="senha">
        <input type="button" value="enviar" onclick="enviar()">
    </form>
    <hr>
    <form action="compra.php" method="POST">
        <select name="lista">
            <option value="0">- none - </option>
            <option value="1">Sabão</option>
            <option value="2">Arroz</option>
            <option value="3">Batata</option>
            <option value="4">Óleo</option>
            <option value="5">Sardinha</option>
            <option value="6">Limão</option>
            <option value="7">Laranja</option>
        </select>
        <button>Login</button>  
    </form>
    <hr>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload">
        <button>Enviar</button>
    </form>
    <img src="./files/imagem.jpeg">
    <script>
        function enviar() {
            var email = document.getElementById("email").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                document.getElementById("error").innerHTML = 'aguarde ...';
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("error").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "autenticacao.php?email=" + email, true);
            xhttp.send(); 
        }

    </script>
</body>
</html>